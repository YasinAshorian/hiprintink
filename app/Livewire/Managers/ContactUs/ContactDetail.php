<?php

namespace App\Livewire\Managers\ContactUs;

use Livewire\Component;

class ContactDetail extends Component
{
    public \App\Models\ContactUs $contactUs;

    public function render()
    {
        return view('livewire.managers.contact-us.contact-detail')->layout('livewire.layouts.managers');
    }
}
