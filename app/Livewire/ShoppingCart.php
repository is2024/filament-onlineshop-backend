<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;

class ShoppingCart extends Component
{
    public $carts = [];
    public $total = 0;
    public $totalItems = 0;


    public function loadCarts()
    {
        $this->carts = Cart::where('user_id', auth()->id())
                        ->with('product')
                        ->get();
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->total = 0;
        $this->totalItems = 0;

        foreach($this->carts as $cart) {
            $this->total += $cart->product->price * $cart->quantity;
            $this->totalItems += $cart->quantity;
        }
    }

    public function mount()
    {
        $this->loadCarts();
    }

    public function render()
    {
        return view('livewire.shopping-cart')
            ->layout('components.layouts.app');;
    }

    public function incrementQuantity($cartId)
    {
        $cart = Cart::find($cartId);
        $cart->update([
            'quantity' => $cart->quantity + 1
        ]);

        $this->loadCarts();
        $this->dispatch('showAlert', [
            'message' => 'Quantity updated',
            'type' => 'success'
        ]);
    }

    public function decrementQuantity($cartId)
    {
        $cart = Cart::find($cartId);
        if ($cart->quantity > 1) {
            $cart->update([
                'quantity' => $cart->quantity - 1
            ]);
        } else {
            $cart->delete();
        }


        $this->loadCarts();
        $this->dispatch('showAlert', [
            'message' => 'Quantity updated',
            'type' => 'success'
        ]);
    }

    public function checkout()
    {
        if ($this->carts->isEmpty()) {
            $this->dispatch('showAlert', [
                'message' => 'Keranjang belanja kosong',
                'type' => 'error'
            ]);
        }

        return redirect()->route('checkout');
    }
}
