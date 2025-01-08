<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Campaign;
use App\Models\EmailService;
use App\Models\OrganizationSetup;
use App\Models\SenderEmailId;
use App\Models\SmtpServer;
use App\Models\User;
use App\Services\Mailer\MultiMailer;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Throwable;

class SmtpController extends Controller {
    public function index() {
        $email_providers = EmailService::all();
        $mailgunService = EmailService::with('domain')->where('provider_name', 'mailgun')->first();
        $system = OrganizationSetup::where('name', 'test_connection_email')->first();
        $testConnectionEmail = $system->value;

        return view('smtp.index', compact('email_providers', 'mailgunService', 'testConnectionEmail'));
    }

    /**
     * configure
     */
    public function configure($mail) {
        $e_server = getUserActiveEmailDetails($mail);
        $system = OrganizationSetup::where('name', 'test_connection_email')->first();
        $testConnectionEmail = $system->value;

        return view('smtp.configure', compact('mail', 'e_server', 'testConnectionEmail'));
    }

    /**
     * store
     */
    public function store(Request $request) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            // $provider_count = EmailService::where('provider_name', $request->input('provider_name'))->count();

            // if ($provider_count > 0) {
            //     $provider_server = $provider_count + 1;
            // } else {
            //     $provider_server = 1;
            // }
            $e_server = new EmailService;
            $e_server->name = $request->input('provider_name');
            $e_server->provider_name = $request->input('provider_name');
            $e_server->api_key = $request->input('api_key');
            $e_server->driver = $request->input('driver');
            $e_server->host = $request->input('host');
            $e_server->port = $request->input('port');
            $e_server->username = $request->input('username');
            $e_server->password = $request->input('password');
            $e_server->encryption = $request->input('encryption');
            $e_server->from = $request->input('from');
            $e_server->from_name = $request->input('from_name');
            $e_server->sendmail = '/usr/sbin/sendmail -bs';
            $e_server->pretend = 0;
            $e_server->active = 1;

            if ($e_server->save()) {
                $email_sender = new SenderEmailId;
                $email_sender->owner_id = Auth::id();
                $email_sender->email_service_id = $e_server->id;
                $email_sender->sender_email_address = $request->input('from');
                $email_sender->sender_name = $request->input('from_name');
                $email_sender->save();
            }

            \Artisan::call('optimize:clear');
            notify()->success('New SMTP Server added');
            Alert::success('Great!', trans('New SMTP Server added'));

            return back();
        } catch (Throwable $th) {
            notify()->error(translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $mail) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            if (Auth::user()->user_type == 'Admin') {
                $e_server = EmailService::where('id', $mail)->first();
                $e_server->provider_name = $request->input('provider_name');
                $e_server->driver = $request->input('driver');
                $e_server->host = $request->input('host');
                $e_server->port = $request->input('port');
                $e_server->username = $request->input('username');
                $e_server->password = $request->input('password');
                $e_server->encryption = $request->input('encryption');
                $e_server->from = $request->input('from');
                $e_server->from_name = $request->input('from_name');
                $e_server->sendmail = '/usr/sbin/sendmail -bs';
                $e_server->pretend = 0;
                $e_server->active = 1;

                if ($e_server->save()) {
                    $email_sender = SenderEmailId::where('owner_id', Auth::id())
                        ->where('email_service_id', $e_server->id)
                        ->first();

                    if ($email_sender != null) {
                        $email_sender->owner_id = Auth::id();
                        $email_sender->email_service_id = $e_server->id;
                        $email_sender->sender_email_address = $request->input('from');
                        $email_sender->sender_name = $request->input('from_name');
                        $email_sender->save();
                    } else {
                        $customer_email_sender = new SenderEmailId;
                        $customer_email_sender->owner_id = Auth::id();
                        $customer_email_sender->email_service_id = $e_server->id;
                        $customer_email_sender->sender_email_address = $request->input('from');
                        $customer_email_sender->sender_name = $request->input('from_name');
                        $customer_email_sender->save();
                    }
                }

                \Artisan::call('optimize:clear');
                notify()->success('SMTP Server updated');
                Alert::success('Great!', trans('SMTP Server updated'));

                return back();
            } else {
                $email_sender = SenderEmailId::where('owner_id', Auth::id())
                    ->where('email_service_id', $mail)
                    ->first();

                if ($email_sender != null) {
                    $email_sender->owner_id = Auth::id();
                    $email_sender->email_service_id = $mail;
                    $email_sender->sender_email_address = $request->input('from');
                    $email_sender->sender_name = $request->input('from_name');
                    $email_sender->save();
                } else {
                    $customer_email_sender = new SenderEmailId;
                    $customer_email_sender->owner_id = Auth::id();
                    $customer_email_sender->email_service_id = $mail;
                    $customer_email_sender->sender_email_address = $request->input('from');
                    $customer_email_sender->sender_name = $request->input('from_name');
                    $customer_email_sender->save();
                }

                \Artisan::call('optimize:clear');
                Alert::success('Great!', trans('SMTP Server updated'));

                notify()->success('SMTP Server updated');

                return back();
            }
        } catch (Throwable $th) {
            notify()->error(translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    /**
     * set_default
     */
    public function set_default(Request $request, $mail) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        $status = EmailService::where('provider_name', $mail)
            ->HasAgent()
            ->first();
        $active = false;

        if ($status != null) {
            if ($status->active == 0) {
                $status->active = true;
                $active = true;
            } else {
                $status->active = false;
            }
            $status->save();

            /*deactivate all theme*/
            $providers = EmailService::HasAgent()->get();

            foreach ($providers as $provider) {
                if ($active) {
                    if ($provider->id != $status->id) {
                        $provider->active = false;
                    }
                } else {
                    $provider->active = false;
                }
                $provider->save();
            }

            \Artisan::call('optimize:clear');
            notify()->success(Str::upper($mail).' '.translate('selected as default'));

            return back();
        } else {
            notify()->error('Whoops'.translate('Please Configure First'));

            return back();
        }
    }

    /**
     * test
     */
    public function test(Request $request, $id) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        try {
            //     //* NEW_CODE

            $service = getUserActiveEmailDetails($id);
            // $service = EmailService::first();

            MultiMailer::mail($service)
                ->to(org('test_connection_email'))
                ->send(new TestMail($service));
            Alert::success('Great!', trans('Connection is secure'));
            notify()->success(translate('Connection Secure'));

            return back();
        } catch (Exception $e) {
            notify()->error(translate($e->getMessage()));

            return back()->withErrors($e->getMessage());
        }
    }

    /**
     * SystemSmtp
     */
    public function setAsSystemSmtp($mail) {
        if (env('DEMO_MODE') === 'YES') {
            Alert::warning('warning', 'This is demo purpose only');

            return back();
        }

        $getAdmin = User::where('id', Auth::user()->id)->where('user_type', 'Admin')->select('id')->first();

        try {
            switch ($mail) {
                case 'gmail':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'gmail')->first();

                    $gmail = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $gmail->mail_name = $mail;
                    $gmail->mail_mailer = $getAdminEmail->driver;
                    $gmail->mail_host = $getAdminEmail->host;
                    $gmail->mail_port = $getAdminEmail->port;
                    $gmail->mail_username = $getAdminEmail->username;
                    $gmail->mail_password = $getAdminEmail->password;
                    $gmail->mail_encryption = $getAdminEmail->encryption;
                    $gmail->mail_from_address = $getAdminEmail->from;
                    $gmail->mail_from_name = $getAdminEmail->from_name;

                    if ($gmail->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $gmail->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $gmail->mail_host);
                        overWriteEnvFile('MAIL_PORT', $gmail->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $gmail->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $gmail->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $gmail->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $gmail->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $gmail->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                case 'yahoo':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'yahoo')->first();

                    $yahoo = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $yahoo->mail_name = $mail;
                    $yahoo->mail_mailer = $getAdminEmail->driver;
                    $yahoo->mail_host = $getAdminEmail->host;
                    $yahoo->mail_port = $getAdminEmail->port;
                    $yahoo->mail_username = $getAdminEmail->username;
                    $yahoo->mail_password = $getAdminEmail->password;
                    $yahoo->mail_encryption = $getAdminEmail->encryption;
                    $yahoo->mail_from_address = $getAdminEmail->from;
                    $yahoo->mail_from_name = $getAdminEmail->from_name;

                    if ($yahoo->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $yahoo->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $yahoo->mail_host);
                        overWriteEnvFile('MAIL_PORT', $yahoo->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $yahoo->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $yahoo->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $yahoo->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $yahoo->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $yahoo->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                case 'webmail':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'webmail')->first();

                    $webmail = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $webmail->mail_name = $mail;
                    $webmail->mail_mailer = $getAdminEmail->driver;
                    $webmail->mail_host = $getAdminEmail->host;
                    $webmail->mail_port = $getAdminEmail->port;
                    $webmail->mail_username = $getAdminEmail->username;
                    $webmail->mail_password = $getAdminEmail->password;
                    $webmail->mail_encryption = $getAdminEmail->encryption;
                    $webmail->mail_from_address = $getAdminEmail->from;
                    $webmail->mail_from_name = $getAdminEmail->from_name;

                    if ($webmail->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $webmail->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $webmail->mail_host);
                        overWriteEnvFile('MAIL_PORT', $webmail->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $webmail->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $webmail->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $webmail->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $webmail->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $webmail->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                case 'mailgun':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'mailgun')->first();

                    $mailgun = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $mailgun->mail_name = $mail;
                    $mailgun->mail_mailer = $getAdminEmail->driver;
                    $mailgun->mail_host = $getAdminEmail->host;
                    $mailgun->mail_port = $getAdminEmail->port;
                    $mailgun->mail_username = $getAdminEmail->username;
                    $mailgun->mail_password = $getAdminEmail->password;
                    $mailgun->mail_encryption = $getAdminEmail->encryption;
                    $mailgun->mail_from_address = $getAdminEmail->from;
                    $mailgun->mail_from_name = $getAdminEmail->from_name;

                    if ($mailgun->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $mailgun->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $mailgun->mail_host);
                        overWriteEnvFile('MAIL_PORT', $mailgun->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $mailgun->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $mailgun->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $mailgun->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $mailgun->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $mailgun->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                case 'zoho':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'zoho')->first();

                    $zoho = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $zoho->mail_name = $mail;
                    $zoho->mail_mailer = $getAdminEmail->driver;
                    $zoho->mail_host = $getAdminEmail->host;
                    $zoho->mail_port = $getAdminEmail->port;
                    $zoho->mail_username = $getAdminEmail->username;
                    $zoho->mail_password = $getAdminEmail->password;
                    $zoho->mail_encryption = $getAdminEmail->encryption;
                    $zoho->mail_from_address = $getAdminEmail->from;
                    $zoho->mail_from_name = $getAdminEmail->from_name;

                    if ($zoho->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $zoho->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $zoho->mail_host);
                        overWriteEnvFile('MAIL_PORT', $zoho->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $zoho->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $zoho->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $zoho->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $zoho->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $zoho->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                case 'elastic':

                    $getAdminEmail = EmailService::where('owner_id', $getAdmin->id)->where('provider_name', 'elastic')->first();

                    $elastic = SmtpServer::firstOrNew(['mail_name' => $mail]);
                    $elastic->mail_name = $mail;
                    $elastic->mail_mailer = $getAdminEmail->driver;
                    $elastic->mail_host = $getAdminEmail->host;
                    $elastic->mail_port = $getAdminEmail->port;
                    $elastic->mail_username = $getAdminEmail->username;
                    $elastic->mail_password = $getAdminEmail->password;
                    $elastic->mail_encryption = $getAdminEmail->encryption;
                    $elastic->mail_from_address = $getAdminEmail->from;
                    $elastic->mail_from_name = $getAdminEmail->from_name;

                    if ($elastic->save()) {
                        overWriteEnvFile('DEFAULT_MAIL', $mail);
                        overWriteEnvFile('MAIL_MAILER', $elastic->mail_mailer);
                        overWriteEnvFile('MAIL_HOST', $elastic->mail_host);
                        overWriteEnvFile('MAIL_PORT', $elastic->mail_port);
                        overWriteEnvFile('MAIL_USERNAME', $elastic->mail_username);
                        overWriteEnvFile('MAIL_PASSWORD', $elastic->mail_password);
                        overWriteEnvFile('MAIL_ENCRYPTION', $elastic->mail_encryption);
                        overWriteEnvFile('MAIL_FROM_ADDRESS', $elastic->mail_from_address);
                        overWriteEnvFile('MAIL_FROM_NAME', $elastic->mail_from_name);

                        telling(route('smtp.index'), translate($mail.' System SMTP Server Selected'));
                        notify()->success(Str::upper($mail).' '.translate('System Default Selected'));
                    }

                    return back();

                    break;

                default:
                    notify()->success(translate('Failed Configured Mail'));

                    return back();
                    break;
            }
        } catch (Throwable $th) {
            notify()->error(translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    //   version 3.0

    /**
     * Application SMTP confuguration
     */
    public function systemSmtpConfigure() {
        return view('smtp.smtp');
    }

    public function systemSmtpConfigureUpdate(Request $request) {
        overWriteEnvFile('DEFAULT_MAIL', $request->provider_name);
        overWriteEnvFile('MAIL_MAILER', $request->driver);
        overWriteEnvFile('MAIL_HOST', $request->host);
        overWriteEnvFile('MAIL_PORT', $request->port);
        overWriteEnvFile('MAIL_USERNAME', $request->username);
        overWriteEnvFile('MAIL_PASSWORD', $request->password);
        overWriteEnvFile('MAIL_ENCRYPTION', $request->encryption);
        overWriteEnvFile('MAIL_FROM_ADDRESS', $request->from);
        overWriteEnvFile('MAIL_FROM_NAME', $request->from_name);
        notify()->success(Str::upper($request->provider_name).' '.translate('System SMTP Configured'));

        return back();
    }

    public function systemSmtpConfigureTest() {
        try {
            Mail::send('testing.mail', [], function ($message) {
                $message->from(env('MAIL_FROM_ADDRESS'))
                    ->to(org('test_connection_email'), 'SMTP Test Connection')
                    ->subject('SMTP Test Connection');
            });

            notify()->success(translate('Please check your organization email'));

            return back();
        } catch (Throwable $th) {
            notify()->error(translate('SMTP Connrection failed'));

            return back()->withErrors($th->getMessage());
        }
    }

    //   version 3.0::END

    /**
     * DESTROY
     */

    //    create a delete route for the smtp server
    public function destroy($id) {
        try {
            $check_campaign_smtp = Campaign::where('smtp_server_id', $id)->first();

            if ($check_campaign_smtp == null) {
                $smtp = EmailService::findOrFail($id);
                $smtp->delete();
                notify()->success(translate('Deleted Successfully'));

                return back();
            } else {
                notify()->warning(translate('SMTP is in active campaign'));

                return back();
            }
        } catch (Throwable $th) {
            notify()->error(translate('Something went wrong'));

            return back()->withErrors($th->getMessage());
        }
    }

    //END
}
