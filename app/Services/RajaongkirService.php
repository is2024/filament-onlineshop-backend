<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\RajaongkirSetting;
use Filament\Notifications\Notification;


class RajaongkirService
{
    protected $apiKey;
    protected $baseUrl;
    protected $setting;

    public function __construct()
    {
        $this->setting = RajaongkirSetting::getActive();

        if (!$this->setting || !$this->setting->is_valid) {
            Notification::make()
                ->title('Rajaongkir API is not valid')
                ->body('Please configure valid Rajaongkir settings before creating a store')
                ->danger()
                ->send();
            return;
        }

        $this->apiKey = $this->setting->api_key;
        $this->baseUrl = $this->setting->base_url;
    }

    public function getProvinces()
    {

        if (!$this->setting || !$this->setting->is_valid) {
            return collect();
        }

        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get($this->baseUrl.'/province');



        if ($response->successful()) {
            return collect($response->json('rajaongkir.results'))->pluck('province', 'province_id');
        }
    }

    public function getCities($provinceId)
    {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get($this->baseUrl.'/city', [
            'province' => $provinceId
        ]);

        if ($response->successful()) {
            return collect($response->json('rajaongkir.results'))
                ->mapWithKeys(function ($item) {
                    $displayName = "{$item['type']} {$item['city_name']}";
                    return [$item['city_id'] => $displayName];
                });
        }
    }

    public function getSubdistricts($cityId)
    {
        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get("{$this->baseUrl}/subdistrict", [
            'city' => $cityId
        ]);

        if ($response->successful()) {
            return collect($response->json('rajaongkir.results'))
                ->mapWithKeys(function ($item) {
                    return [
                        $item['subdistrict_id'] => [
                            'id' => $item['subdistrict_id'],
                            'name' => $item['subdistrict_name'],
                            'postal_code' => $item['postal_code']
                        ]
                    ];
                });
        }
        return collect();
    }

    public function getCost(
        $origin,
        $originType,
        $destination,
        $destinationType,
        $weight,
        $courier
    ) {

        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->post($this->baseUrl.'/cost', [
            'origin' => $origin,
            'originType' => $originType,
            'destination' => $destination,
            'destinationType' => $destinationType,
            'weight' => $weight,
            'courier' => $courier
        ]);

        if ($response->successful()) {
            $costs = collect($response->json('rajaongkir.results'))->flatMap(function($courier) {
                return collect($courier['costs'])->map(function($service) use ($courier) {
                    return [
                        'code' => $courier['code'],
                        'name' => $courier['name'],
                        'service' => $service['service'],
                        'description' => $service['description'],
                        'cost' => $service['cost'][0]['value'],
                        'etd' => $service['cost'][0]['etd'],
                    ];
                });
            });

            return $costs;
        } else {
            $error = $response->json('rajaongkir.status.description') ?? 'Unknown error occurred';
            dd($error);
        }

        return collect();
    }
}
