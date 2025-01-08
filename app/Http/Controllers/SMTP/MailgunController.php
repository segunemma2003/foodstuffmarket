<?php

namespace App\Http\Controllers\SMTP;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\EmailService;
use App\Services\Mailgun\MailgunService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MailgunController extends Controller {
    private $apiKey;

    private $emailService;

    public function __construct() {
        $this->emailService = EmailService::where('provider_name', 'mailgun')->first();
        $this->apiKey = $this->emailService?->api_key;
    }

    public function create() {
        return view('smtp.mailgun.verify', [
            'domain' => null,
        ]);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'domain_name' => 'required',
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors() as $error) {
                notify()->error($error->message);

                return back();
            }
        }
        $domain = Domain::create([
            'name' => $request->domain_name,
            'email_service_id' => $request->email_service_id ?? $this->emailService->id,
            'user_id' => auth()->id(),
        ]);
        $mg = new MailgunService($this->apiKey);
        $result = $mg->createDomain($request->domain_name);
        if (str($result?->message)->contains('domain already exists')) {
            notify()->warning('Domain already exists in Mailgun\'s database!');

            return back();
        }

        notify()->success('Domain Created');

        return redirect()->route('mailgun.domain.show', $domain->name);
    }

    public function index() {
        $apiKey = $this->apiKey;
        $mg = new MailgunService($apiKey);
        $domains = $mg->domains();

        // dd($domains);
        return view('smtp.mailgun.index', [
            'domains' => $domains->items,
        ]);
    }

    public function show($domain) {
        $apiKey = $this->apiKey;
        $mg = new MailgunService($apiKey);
        $domain = $mg->getDomain($domain);

        // dd($domain);
        return view('smtp.mailgun.verify', [
            'domain' => $domain,
        ]);
    }

    public function verify($domain) {
        $apiKey = $this->apiKey;
        $mg = new MailgunService($apiKey);
        $domain = $mg->verifyDomain($domain);
        // dd($domain);
        notify()->success($domain->message);

        return redirect()->route('mailgun.domain.show', $domain->domain->name);
    }

    public function delete($domain) {
        $apiKey = $this->apiKey;
        $mg = new MailgunService($apiKey);
        $domain = $mg->deleteDomain($domain);
        dd($domain);
        notify()->success($domain->message);

        return redirect()->route('mailgun.domain.show', $domain->domain->name);
    }
}
