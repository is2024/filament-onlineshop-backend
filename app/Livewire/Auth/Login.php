<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login')
             ->layout('components.layouts.app', ['hideBottomNav' => true]);
    }
}
