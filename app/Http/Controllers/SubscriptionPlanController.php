<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\PlanPurchased;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class SubscriptionPlanController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('subscription.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'emails' => 'required',
            'sms' => 'required',
            'price' => 'required',
        ]);

        try {
            $plan = new SubscriptionPlan();
            $plan->name = $request->name;
            $plan->description = $request->description;
            $plan->duration = $request->duration;
            $plan->emails = $request->emails;
            $plan->sms = $request->sms;
            $plan->price = $request->price;
            $plan->agent_limit = $request->agent_limit;

            if ($request->status == 1) {
                $plan->status = true;
            } else {
                $plan->status = false;
            }

            if ($request->display == 1) {
                $plan->display = true;
            } else {
                $plan->display = false;
            }

            $plan->save();

            telling(route('subscription.index'), translate('New Subscription Plan Created'));

            notify()->success(Str::upper($plan->name).' '.translate('Plan Created Successfully'));

            return back();
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        try {
            $edit_plan = SubscriptionPlan::where('id', $id)->first();

            return view('subscription.edit', compact('edit_plan'));
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'emails' => 'required',
            'sms' => 'required',
            'price' => 'required',
        ]);

        try {
            $update_plan = SubscriptionPlan::where('id', $id)->first();
            $update_plan->name = $request->name;
            $update_plan->description = $request->description;
            $update_plan->duration = $request->duration;
            $update_plan->emails = $request->emails;
            $update_plan->sms = $request->sms;
            $update_plan->price = $request->price;

            if ($request->status == 1) {
                $update_plan->status = true;
            } else {
                $update_plan->status = false;
            }

            if ($request->display == 1) {
                $update_plan->display = true;
            } else {
                $update_plan->display = false;
            }

            $update_plan->save();

            Alert::success(translate('Updated'), translate('Subscription plan is updated'));

            return back();
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            $check_plan = PlanPurchased::where('id', $id)->first();

            if ($check_plan == null) {
                SubscriptionPlan::where('id', $id)->delete();
                Alert::success(translate('Deleted'), translate('Subscription plan is deleted'));

                return back();
            } else {
                Alert::warning(translate('Whoops'), translate('Subscription plan has active users'));

                return back();
            }
        } catch (Throwable $th) {
            Alert::error(translate('Whoops'), translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }
    //END
}
