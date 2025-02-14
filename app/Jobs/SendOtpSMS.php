<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendOtpSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $campaignSMSs;
    protected $message;
    protected $termii;
    protected $sms_built;
    /**
     * Create a new job instance.
     */
    public function __construct($campaignSMSs, $message, $termii, $sms_built)
    {
        $this->campaignSMSs = $campaignSMSs;
        $this->message = $message;
        $this->termii = $termii;
        $this->sms_built = $sms_built;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->campaignSMSs as $campaignSMS) {
            $number = $campaignSMS->phones->country_code.$campaignSMS->phones->phone;

            $args = array("api_key" => $this->termii->sms_token, "to" => $number,  "from" => "N-Alert",
            "sms" => strip_tags($this->sms_built->body),  "type" => "plain",  "channel" => "dnd" );


            $url = $this->termii->url;
            $post_data = json_encode($args);
    // Make the call using API.
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v3.api.termii.com/api/sms/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $post_data,
        CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        }
    }
}
