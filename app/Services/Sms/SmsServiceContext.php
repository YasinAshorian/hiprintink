<?php

namespace App\Services\Sms;

class SmsServiceContext
{

    private $smsService;

    public function __construct($smsService)
    {
        $this->smsService = $smsService;
    }

    public function sendSms($message, $recipient)
    {
        return $this->smsService->sendSms($message, $recipient);
    }

    public function sendPattern($message, $recipient)
    {
        return $this->smsService->sendPattern($message, $recipient);
    }
}
