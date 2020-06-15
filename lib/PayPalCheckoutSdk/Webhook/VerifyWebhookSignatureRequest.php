<?php

namespace PayPalCheckoutSdk\Webhook;

use PayPalHttp\HttpRequest;

class VerifyWebhookSignatureRequest extends HttpRequest
{
    public function __construct()
    {
        parent::__construct('/v1/notifications/verify-webhook-signature?', 'POST');
        $this->headers['Content-Type'] = 'application/json';
    }

    public function payPalPartnerAttributionId($payPalPartnerAttributionId)
    {
        $this->headers['PayPal-Partner-Attribution-Id'] = $payPalPartnerAttributionId;
    }

    public function prefer($prefer)
    {
        $this->headers['Prefer'] = $prefer;
    }
}
