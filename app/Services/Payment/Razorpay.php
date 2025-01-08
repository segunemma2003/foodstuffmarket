<?php

namespace App\Services\Payment;

use Razorpay\Api\Api;
use App\Models\SubscriptionPlan;
use App\Contracts\PaymentProcessor;
use App\Http\Requests\Payment\PaymentRequest;
use Exception;

class Razorpay extends PaymentProcessor {
    protected $razorpay;
    public function __construct() {
        parent::__construct();
        $this->razorpay = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    }
    public function handle(PaymentRequest $request, SubscriptionPlan $subscription): bool {
        try {
            $this->razorpay
            ->utility
            ->verifyPaymentSignature([
                'razorpay_signature' => $request->razorpay['signature'],
                'razorpay_payment_id' => $request->razorpay['payment_id'],
                'razorpay_order_id' => $request->razorpay['order_id'],
            ]);
            $this->complete($request, $subscription);
            return true;
        } catch (Exception $e) {
            return false;
        }

    }

    public function redirect(PaymentRequest $request, ?SubscriptionPlan $subscription = null) {
        $receiptId = uniqid('receipt-');
        $amount = $subscription->price * 100;
        $currency = 'USD';
        $order = $this->razorpay->order->create([
                        'receipt' => $receiptId,
                        'amount' => $amount,
                        'currency' => $currency,
                    ]);

        $razorpay = [
            'order_id' => $order['id'],
            'key' => env('RAZORPAY_KEY'),
            'callback_url' => route('payment.callback', $request->validated()),
            'amount' => $amount,
            'name' => $request->name,
            'currency' => $currency,
            'email' => $request->email,
            'contact' => $request->phone,
            'address' => 'unknown',
            'description' => orgName().' - '.$subscription->name.' plan',
        ];
        return redirect(route('payment.index', ['plan' => $subscription]))->with('razorpay', $razorpay);
    }

    public function setShouldRedirect() {
        return true;
    }
    public function getLogoUrl() {
        return filePath("frontend/images/gateway/razorpay.png");
    }

    protected function getPaymentMethod(): string {
        return 'razorpay';
    }
}
