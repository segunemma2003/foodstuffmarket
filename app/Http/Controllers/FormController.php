<?php

namespace App\Http\Controllers;

use App\Models\EmailGroup;
use App\Models\FormBuilder;
use App\Models\FormBuilderResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FormController extends Controller
{
    public function index()
    {
        // Fetch all forms from the database
        $forms = FormBuilder::with('group')->get(); // Assuming you have a relationship with the 'group' table
        // dd($forms);
        return view('form_builder.template-list', compact('forms'));
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
                'slug'=> Str::slug($validated['form_name'])."-".time()."-".uniqid(),
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
        try{
       $data = $request->validate([
            'form_design' => 'required',
            'fields' => 'required|array',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string',
            'button_text' => 'required|string|max:50',
            'status' => 'sometimes|string',
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
                'status' => $data['status'] ?? 'draft',  // Mark this form as draft
            ]
        );

        return response()->json([
            "status"=>true,
            "id"=> $form->id,
            "message"=>"Response Saved"
        ],200);
    }catch(\Exception $e){
        return response()->json(["status"=>false, "message"=>"It failed", "msg"=>$e->getMessage()],422);
    }
        // return redirect()->route('form.prev',['id' => $form->id]);
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
        try{
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

        return response()->json([
            "status"=>true,
            "id"=> $form->id,
            "message"=>"Response Saved"
        ],200);
    }catch(\Exception $e){
        return response()->json(["status"=>false, "message"=>"It failed", "msg"=>$e->getMessage()],422);
    }
        // return redirect()->route('form.prev',['id' => $form->id]);
        // return view('forms.preview', ['form' => $form]);
    }

    public function saveItem(Request $request)
    {
        // $data = $request->all();
        try{
        $form = FormBuilder::whereId($request->form_id)->first();
        $form->status = "save";
        $form->save();
        return response()->json(['success' => true, 'form_id' => $form->id, "slug"=>$form->slug],200);
        }catch(\Exception $e){
            return response()->json(["status"=>false, "message"=>"It failed", "msg"=>$e->getMessage()],422);
        }
    }

    public function capture($uuid)
    {
        $form = FormBuilder::where('slug', $uuid)->firstOrFail();
        return view('form_builder.form-capture', compact('form'));
    }


    public function captureResponse(Request $request, $uuid)
    {
        $form = FormBuilder::where('slug', $uuid)->firstOrFail();

        try {
            // Validate and save form responses
            $data = $request->except('_token');
            FormBuilderResponse::create([
                'form_builder_id' => $form->id,
                'data' => json_encode($data),
            ]);

            // Set success message
            return redirect()->route('form.capture', $uuid)
                            ->with('success', 'Your response has been saved successfully!');
        } catch (\Exception $e) {
            // Set error message
            return redirect()->route('form.capture', $uuid)
                            ->with('error', 'An error occurred while saving your response. Please try again.');
        }
    }



    public function edit($id)
    {
        $form = FormBuilder::findOrFail($id);
        return view('form_builder.embed-playground', compact('form'));
    }
    public function responses($id)
    {
        $form = FormBuilder::findOrFail($id);
        $responses = $form->responses; // Assuming you have a relationship to fetch responses
        return view('form_builder.responses', compact('form', 'responses'));
    }

    // public function embedplayground(){
    //     re
    // }
}
