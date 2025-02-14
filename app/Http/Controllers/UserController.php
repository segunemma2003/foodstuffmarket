<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\PersonalInformation;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class UserController extends Controller {
    /**
     * USER UPDATE
     */
    public function update(Request $request) {
        // return $request->all();
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            if (! $request->hasFile('avatar')) {
                $request->validate(
                    [
                        'name' => 'required',
                    ],
                    [
                        'name.required' => 'Name is required',
                    ]
                );
            }

            $user_update = User::where('id', Auth::user()->id)->first();
            $user_update->name = $request->name;
            $user_update->email = $request->email;

            if ($request->hasFile('avatar')) {
                $user_update->photo = fileUpload($request->file('avatar'), 'avatar');
            }

            $user_update->slug = Str::slug($request->name);
            $user_update->save();
            notify()->success(translate('Updated'));

            return back();
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * PERSOLAN UPDATE
     */
    public function personal_update(Request $request) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            $personal_update = PersonalInformation::where('user_id', Auth::user()->id)->first();

            if ($personal_update != null) {
                $personal_update->nid = $request->nid ?? null;
                $personal_update->address = $request->address ?? null;
                $personal_update->phone = $request->phone ?? null;
                $personal_update->save();
            } else {
                $personal = new PersonalInformation;
                $personal->user_id = Auth::user()->id;
                $personal->nid = $request->nid ?? null;
                $personal->address = $request->address ?? null;
                $personal->phone = $request->phone ?? null;
                $personal->save();
            }

            notify()->success(translate('Updated'));

            return back();
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    public function updateTimeZone(Request $request) {
        // dd($request->timezone);
        try {
            auth()->user()->update([
                'timezone' => $request->timezone,
            ]);
            notify()->success('Time-zone'.translate('Updated'));

            return back();
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    //END
}
