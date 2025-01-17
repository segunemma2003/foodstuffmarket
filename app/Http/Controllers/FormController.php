<?php

namespace App\Http\Controllers;

use App\Models\EmailGroup;
use Illuminate\Http\Request;

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
        $data = $request->all();
        return redirect()->route('form-builder.embed-playground');
    }
}
