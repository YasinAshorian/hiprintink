<?php

namespace App\Livewire\Managers\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;


    public function rules()
    {
        return [
            'email' => 'required|exists:users,email',
            'password' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'اطلاعات را به درستی وارد نمایید.',
            'email.exists' => 'به این بخش دسترسی ندارید.',
            'password' => 'وارد نمودن پسورد الزامیست .'
        ];
    }


    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('managers.dashboard')->with(['success' => true, 'message' => "ورود به سیستم با موفقیت انجام شد ."]);
        }

        return back()->with(['error' => true, 'message' => "مشکلی در فرآیند ورود به سیستم به وجود آمده !"]);

    }


    public function render()
    {
        return view('livewire.managers.auth.login')->layout('livewire.layouts.auth');
    }
}
