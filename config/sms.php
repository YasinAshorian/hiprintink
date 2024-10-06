<?php

return [


    /** sms config  */
    'providers' => [
        'faraz-sms' => [
            'class' => \App\Services\Sms\FarazSmsProvider::class,
            'url' => 'https://ippanel.com/services.jspd',
            'uname'=>'co09960142284',
            'pass'=>'Faraz@0770302904',
            'from'=>'5000125475',
//            'op'=>'send',
        ]
    ],

    'pattern_code' => 'hkv8cyvsq57e540',

    'default_provider' => env('SMS_DEFAULT_PROVIDER', 'faraz-sms'),
];
