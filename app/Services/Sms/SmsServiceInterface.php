<?php

namespace App\Services\Sms;

interface SmsServiceInterface
{
    public function sendSms($message, $recipient);
    public function sendPattern($message, $recipient);
}
