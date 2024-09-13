<?php


use App\Models\Manager;
use App\Models\ManagerToken;
use App\Models\UserToken;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

function response_log($type, $message, $data)
{
    \App\Models\ResponseLog::query()->create([
        'type' => $type,
        'message' => $message,
        'data' => $data
    ]);
}



function sendCodeWithSms($phone_number)
{

    $activeCode = \App\Models\CodeVerification::query()
        ->where('phone_number', trim($phone_number))
        ->where('expired_at', '>=', Carbon::now()->format('Y/m/d H:i:s'))
        ->where('is_verify', false)
        ->first();

    if (isset($activeCode)) {
        return back()->with([
            'error' => true,
            'message' => 'کد تایید قبلی هنوز فعال است، لطفاً پس از گذشت 5 دقیقه دوباره تلاش کنید'
        ]);
    }

    $codeVerify = \App\Models\CodeVerification::query()->create([
        'phone_number' => $phone_number,
        'code' => str_pad(rand(0, 999999), 4, '0', STR_PAD_LEFT),
        'expired_at' => Carbon::now()->addMinutes(5)
    ]);

    $smsProvider = app(\App\Services\Sms\SmsServiceContext::class);
    $result = $smsProvider->sendPattern($codeVerify->code, $phone_number);

    if ($result) {
        $codeVerify->update([
            'send_sms' => 1
        ]);
    }

    return true;
}

function uploadImage($path, $file)
{
    $fileName = Str::random() . $file->getClientOriginalName();
    $filePath = "$path/images/$fileName";
    $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($file));

    if ($isFileUploaded) {

        return $filePath;
    }

    return false;
}

function checkUserLogin()
{
    $UserToken = false;
    if (isset($_COOKIE['ManagerToken'])) {
        $UserToken = ManagerToken::query()->where('token', $_COOKIE['ManagerToken'])->orderby('id', 'ASC')->first();
        if (!$UserToken) {
            setcookie("ManagerToken", "", time() - 3600);
            goto Condition;
        }

        $user = Manager::query()->where('id', $UserToken->manager_id)->first();
    }

    Condition:
    if ($UserToken) {
        return $user;

    } else {
        return false;
    }

}

function setToken(Manager $manager)
{

    $token = Str::random(60);
    $token_expired_at = Carbon::now()->addDays(10);
    ManagerToken::create([
        'manager_id' => $manager->id,
        'token' => $token,
        'expired_at' => $token_expired_at
    ]);

  return  setcookie("ManagerToken", $token, $token_expired_at->timestamp, '/');

}


