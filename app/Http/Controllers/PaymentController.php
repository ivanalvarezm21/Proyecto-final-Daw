<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );
    }

    public function payWithPaypal()
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal('10.00');
        $amount->setCurrency('EUR');

        $transaction = new Transaction();
        $transaction->setAmount($amount);

        $callbackUrl = url('/paypal/status');
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            //echo $payment;
        
            return redirect()->away($payment->getApprovalLink());
        }
        catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }

    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $PayerID = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$PayerID || !$token) {
            return redirect('/coches')->with('success', 'El pago no se ha podido realizar con éxito');
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($PayerID);

        $result = $payment->execute($execution, $this->apiContext);
        //dd($result);

        if ($result->getState() === 'approved') {
            return redirect('/coches')->with('success', 'El pago mediante PayPal se ha realizado correctamente');
        }

        return redirect('/coches')->with('danger', 'El pago no se ha podido realizar con éxito');
    }
}
