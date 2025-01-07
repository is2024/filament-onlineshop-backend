<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Services\RajaongkirService;
use App\Models\RajaongkirSetting;

class Checkout extends Component
{
    public $carts = [];
    public $total = 0;
    public $isPro = false;
    public $provinces = [];
    public $cities = [];
    public $isLoadingProvinces = false;



    protected $rajaongkir;

    public $shippingData = [
        'recipient_name' => '',
        'phone' => '',
        'province_id' => '',
        'city_id' => '',
        'subdistrict_id' => '',
        'address_detail' => '',
        'noted' => ''
    ];
    protected $rules = [
        'shippingData.recipient_name' => 'required|min:3',
        'shippingData.phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'shippingData.province_id' => 'required',
        'shippingData.city_id' => 'required',
        'shippingData.subdistrict_id' => 'required_if:isPro,true',
        'shippingData.address_detail' => 'required|min:10',
        'selectedCourier' => 'required',
        'selectedService' => 'required'
    ];

    public function boot(RajaongkirService $rajaongkir)
    {
        $this->rajaongkir = $rajaongkir;

        if (auth()->check()) {
            $user = auth()->user();
            $this->shippingData['recipient_name'] = $user->name;
        }

    }


    public function mount()
    {
        $this->loadCarts();
        $this->isPro = RajaongkirSetting::getActive()->isPro();

    }
    public function loadCarts()
    {
        $this->carts = Cart::where('user_id', auth()->id())
            ->with('product')
            ->get();

        $this->calculateTotal();
    }

    public function loadProvinces()
    {
        if (empty($this->provinces)) {
            // $this->isLoadingProvinces = true;
            $this->provinces = $this->rajaongkir->getProvinces();
            // $this->isLoadingProvinces = false;
        }
    }
    public function updatedShippingDataProvinceId($value)
    {
        if ($value) {

            $this->cities = $this->rajaongkir->getCities($value);
        }
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
    public function render()
    {
        return view('livewire.checkout')
        ->layout('components.layouts.app', ['hideBottomNav' => true]);
    }
}
