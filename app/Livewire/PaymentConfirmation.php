<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentConfirmation extends Component
{
    public function render()
    {
        return view('livewire.payment-confirmation')
        ->layout('components.layouts.app', ['hideBottomNav' => true]);
    }
}
