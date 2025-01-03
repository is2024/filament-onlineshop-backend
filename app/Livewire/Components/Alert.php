<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Alert extends Component
{
    public $message = '';
    public $type = 'success';
    public $show = false;

    protected $listeners = ['showAlert'];

    public function moun()
    {
        $this->message = '';
        $this->type = 'success';
        $this->show = false;
    }

    public function showAlert($params)
    {
        $this->message = $params['message'] ?? '';
        $this->type = $params['type'] ?? 'success';
        $this->show = true;

        $this->dispatch('hideAlert');
    }

    public function render()
    {
        return view('livewire.components.alert');
    }
}
