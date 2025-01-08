<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\CampaignLog;

class CampaignLogController extends Controller {
    /**
     * LOG LIST
     */
    public function index() {
        return view('campaign_logs.index');
    }

    /**
     * EMAILS
     */
    public function getEmails($id) {
        return view('campaign_logs.campaign_emails', compact('id'));
    }

    /**
     * destroy
     */
    public function destroy($id) {
        CampaignLog::where('id', $id)->delete();
        Alert::success(translate('Done'), translate('Log deleted'));

        return back();
    }

    /**
     * smsDestroy
     */
    public function smsDestroy($id) {
        SmsLog::where('id', $id)->delete();
        Alert::success(translate('Done'), translate('Log deleted'));

        return back();
    }

    /**
     * emailDestroy
     */
    public function emailDestroy($id) {
        CampaignLog::where('id', $id)->delete();
        Alert::success(translate('Done'), translate('Log deleted'));

        return back();
    }

    /**
     * BouncedEmail
     */
    public function bounceEmailDestroy($id) {
        BouncedEmail::where('id', $id)->delete();
        Alert::success(translate('Done'), translate('Log deleted'));

        return back();
    }
}
