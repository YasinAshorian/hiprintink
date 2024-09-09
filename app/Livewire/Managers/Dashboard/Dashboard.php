<?php

namespace App\Livewire\Managers\Dashboard;


use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {

        return view('livewire.managers.dashboard.dashboard')->layout('livewire.layouts.managers');
    }
}
