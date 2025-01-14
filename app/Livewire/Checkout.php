<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout')
        ->layout('components.layouts.app', ['hideBottomNav' => true]);
    }
}
