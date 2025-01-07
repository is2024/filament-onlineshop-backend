<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BottomNavigation extends Component
{
    public $activeMenu;

    public function mount()
    {
        $this->activeMenu = $this->getActiveMenu();
    }

    public function getActiveMenu()
    {
        $currentRoute = request()->route()->getName();

        return match($currentRoute) {
            'home' => 'home',
            'shopping-cart' => 'shopping-cart',
            'orders' => 'orders',
            'profile' => 'profile',
            default => 'home'
        };
    }

    public function setActiveMenu($menu)
    {
        $this->activeMenu = $menu;
    }

    public function render()
    {
        return view('livewire.components.bottom-navigation');
    }


}
