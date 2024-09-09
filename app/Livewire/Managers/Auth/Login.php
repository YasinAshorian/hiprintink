<?php

namespace App\Livewire\Managers\Auth;

use Livewire\Component;

class Login extends Component
{

    public $username;
    public $password;


    public function rules()
    {
        return [
            'username' => 'required|exists:managers,username',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'اطلاعات را به درستی وارد نمایید.',
            'username.exists' => 'به این بخش دسترسی ندارید.',
            'password' => 'وارد نمودن پسورد الزامیست .'
        ];
    }


    public function login()
    {

    }


    public function render()
    {
        return view('livewire.managers.auth.login')->layout('livewire.layouts.manager-auth');
    }
}
