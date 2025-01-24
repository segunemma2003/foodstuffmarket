<?php

namespace App\Http\Controllers;

use App\Models\EmailGroup;
use App\Models\FormBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function index()
    {
        return view('form_builder.template-list');
    }

    // Show the embedded form creation page
    public function createEmbeddedForm()
    {
        $emailGroups = EmailGroup::all();
        return view('form_builder.create-form-embedded',compact('emailGroups'));
    }

    // Show the pop-up form creation page
    public function createPopupForm()
    {
        $emailGroups = EmailGroup::all();
        return view('form_builder.create-form-popup', compact('emailGroups'));
    }

    // Show the signup landing page creation page
    public function createSignupPage()
    { $emailGroups = EmailGroup::all();
        return view('form_builder.create-form-signup', compact('emailGroups'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'form_name' => 'required|string|max:255',
            'form_group' => 'required|integer',
            'form_type' => 'required|string'
        ]);
        try {
            $form = FormBuilder::create([
                'name'=>$validated['form_name'],
                'slug'=> $validated['form_name']."-".time()."-".uniqid(),
                'type'=>$validated['form_type'],
                "group_id"=>$validated["form_group"]
            ]);
            return redirect()->route('form.updateForm',['id' => $form->id]);
            // return view('form_builder.embed-playground', compact('form'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to create the form.']);
        }
    }

    public function previewForm($id)
    {
        $form = FormBuilder::findOrFail($id); // Fetch the form by ID
        return view('form_builder.preview_forms', ['form' => $form]);
    }


    public function updateForm($id){
        $form = FormBuilder::whereId($id)->first();
        return view('form_builder.embed-playground', compact('form'));
    }

    public function show(Request $request)
    {
       $data = $request->validate([
            'form_design' => 'required',
            'fields' => 'required|array',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'button_text' => 'required|string|max:50',
       ]);
       Log::info($request->all());
        $form = FormBuilder::updateOrCreate(
            ['id' => $request->form_id], // Check if the form already exists (for drafts)
            [
                'title' => $data['title'],
                'subtitle'=> $data['subtitle'],
                'button_text'=>$data['button_text'],
                'fields'=> json_encode($data['fields']),
                'design' => htmlentities($data['form_design']),
                'status' => 'draft', // Mark this form as draft
            ]
        );

        return redirect()->route('form.prev',['id' => $form->id]);
        // return view('forms.preview', ['form' => $form]);
    }


    public function saveResponse(Request $request, $id)
    {
        $form = FormBuilder::findOrFail($id);
        $validated = $request->validate([
            'data' => 'required|array',
        ]);

        $form->responses()->create(['data' => json_encode($validated['data'])]);
        return response()->json(['message' => 'Response saved successfully']);
    }


    public function saveDraft(Request $request)
    {
        $data = $request->all();

        $form = FormBuilder::updateOrCreate(
            ['id' => $request->form_id], // Check if the form already exists (for drafts)
            [
                'design' => $data['form_design'],
                'status' => 'draft', // Mark this form as draft
            ]
        );

        return response()->json(['success' => true, 'form_id' => $form->id]);
    }

    public function capture($uuid)
    {
        $form = FormBuilder::where('slug', $uuid)->firstOrFail();
        return view('form_builder.form-preview', compact('form'));
    }

    // public function embedplayground(){
    //     re
    // }
}
