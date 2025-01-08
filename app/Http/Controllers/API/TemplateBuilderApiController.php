<?php

namespace App\Http\Controllers\API;

use Alert;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\TemplateBuilder;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class TemplateBuilderApiController extends Controller {
    public function index() {
        try {
            $templateCount = TemplateBuilder::HasAgent()->count();
            $templates = TemplateBuilder::HasAgent()->latest()->paginate(12);

            return view('template_builder.template-list', compact('templates', 'templateCount'));
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    public function store(Request $request) {
        try {

            //slug save

            $slug = Str::slug($request->title);
            $person = TemplateBuilder::where('slug', $slug)->get();

            if ($person->count() > 0) {
                $slug1 = $slug.($person->count() + 1);
            } else {
                $slug1 = $slug;
            }

            $page = TemplateBuilder::where('id', $request->id)->first();
            $page->owner_id = Auth::user()->id;
            $page->title = $request->title;
            $page->slug = $slug;
            $page->html = $request->htmlWithCss;
            $page->css = $request->css;
            $page->save();

            telling(route('templates.index'), translate('New Email Template Created'));

            Alert::success(translate('Success'), translate('Email Template Saved'));

            return response()->json('success', 200);
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    public function delete($id) {
        try {
            $destroy = TemplateBuilder::where('id', $id)->HasAgent()->exists();

            $check_template = Campaign::where('template_id', $id)->count();

            if ($check_template == 0) {
                TemplateBuilder::where('id', $id)->HasAgent()->delete();
                Alert::success(translate('Success'), translate('Email Template Deleted'));

                return back();
            } else {
                Alert::warning(translate('Whoops'), translate('Email Template Already In Use'));

                return back();
            }
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    public function previewDetail($id) {
        try {
            $page = TemplateBuilder::where('id', $id)->first();

            return view('template_builder.preview', compact('page'));
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * DUPLICATE
     */
    public function templateDuplicate($id) {
        $task = TemplateBuilder::where('id', $id)->first();
        $newTask = $task->replicate();
        $newTask->save();

        Alert::success(translate('Success'), translate('Template Duplicated'));

        return back();
    }

    //END
}
