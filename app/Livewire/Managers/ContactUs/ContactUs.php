<?php

namespace App\Livewire\Managers\ContactUs;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        $contactUs = \App\Models\ContactUs::query()->latest()->paginate(15);

        return view('livewire.managers.contact-us.contact-us', ['contactUs' => $contactUs])->layout('livewire.layouts.managers');
    }
}
