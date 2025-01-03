<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;

class ProductDetail extends Component
{
    public $product;
    public $currentImageIndex = 0;
    public $cartCount = 0;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->firstOrFail();
        $this->updateCartCount();
    }

    public function updateCartCount()
    {
        $this->cartCount = Cart::where('user_id', auth()->id())->sum('quantity');
    }

    public function addToCart($productId)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        try {
            $cart = Cart::where('user_id', auth()->id())
                        ->where('product_id', $productId)
                        ->first();

            if ($cart) {
                $cart->update([
                    'quantity' => $cart->quantity + 1
                ]);
            } else {
                Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $productId,
                    'quantity' => 1
                ]);
            }

            $this->updateCartCount();

            $this->dispatch('showAlert', [
                'message' => 'Berhasil ditambahkan ke keranjang',
                'type' => 'success'
            ]);
        } catch(\Exception $e) {
            $this->dispatch('showAlert', [
                'message' => 'Gagal menambahkan ke keranjang'. $e->getMessage(),
                'type' => 'error'
            ]);
        }
    }

    public function nextImage()
    {
        if ($this->currentImageIndex < count($this->product->images) - 1) {
            $this->currentImageIndex++;
        }
    }

    public function previousImage()
    {
        if ($this->currentImageIndex > 0) {
            $this->currentImageIndex--;
        }
    }

    public function render()
    {
        return view('livewire.product-detail', [
                'images' => $this->product->images ?? [],
                'currentImage' => $this->product->images[$this->currentImageIndex] ?? null
            ])
            ->layout('components.layouts.app', ['hideBottomNav' => true]);
    }
}
