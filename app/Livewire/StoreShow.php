<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Store;
use App\Models\Category;
use App\Models\Product;

class StoreShow extends Component
{
    public $store;
    public $categories;
    public $selectedCategory = 'all';
    public $products;

    public function mount()
    {
        $this->store = Store::first();
        $this->categories = Category::all();
        $this->loadProducts();
    }

    public function loadProducts()
    {
        $query = Product::query();

        if ($this->selectedCategory !== 'all') {
            $query->where('category_id', $this->selectedCategory);
        }

        $this->products = $query->get();
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->loadProducts();
    }

    public function render()
    {
        return view('livewire.store-show');
    }
}
