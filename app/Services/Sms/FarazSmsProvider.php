<?php

namespace App\Services\Sms;

use GuzzleHttp\Exception\GuzzleException;

class FarazSmsProvider implements SmsServiceInterface
{

    protected array $requestParams;

    public function __construct()
    {
        $this->requestParams = [
            'pass' => config('sms.providers.faraz-sms.pass'),
            'from' => config('sms.providers.faraz-sms.from'),
            'uname' => config('sms.providers.faraz-sms.uname'),
        ];
    }

    public function sendSms($message, $recipient)
    {
        $this->requestParams += [
            'message' => $message,
            'to' => json_encode($recipient),
            'op' => "send",
        ];

        try {
            $handler = curl_init(config('sms.providers.faraz-sms.url'));
            curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($handler, CURLOPT_POSTFIELDS, $this->requestParams);
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
            $response2 = curl_exec($handler);
            return $response2;
        } catch (GuzzleException $e) {
            return false;
        }
    }


    public function sendPattern($message, $recipient)
    {
        try {

            $client = new \SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
            $user = config('sms.providers.faraz-sms.uname');
            $pass = config('sms.providers.faraz-sms.pass');
            $fromNum = config('sms.providers.faraz-sms.from');
            $toNum = array("09026453619");
            $pattern_code = config('sms.pattern_code');
            $input_data = array("verifyCode" => $message);
            return $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);

        } catch (GuzzleException $e) {
            return false;
        }
    }
}
