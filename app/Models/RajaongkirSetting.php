<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class RajaongkirSetting extends Model
{
    protected $fillable = [
        'api_key',
        'api_type',
        'couriers',
        'is_valid',
        'error_message'
    ];

    protected $casts = [
        'is_valid' => 'boolean'
    ];

    public static function getActive()
    {
        return static::where('is_valid', true)->latest()->first();
    }

    public function isPro()
    {
        return $this->api_type === 'pro';
    }

    public function getBaseUrlAttribute(): string
    {
        return $this->api_type === 'pro'
            ? 'https://pro.rajaongkir.com/api'
            : 'https://api.rajaongkir.com/starter';
    }

    public function validateApiKey(): bool
    {
        try {
            $baseUrl = $this->api_type === 'pro'
                ? 'https://pro.rajaongkir.com/api'
                : 'https://api.rajaongkir.com/starter';

            $response = Http::withHeaders([
                'key' => $this->api_key
            ])->get("{$baseUrl}/province");

            $isValid = $response->successful() && $response->json('rajaongkir.status.code') === 200;
            $this->update([
                'is_valid' => $isValid,
                'error_message' => $isValid ? null : 'Invalid API key or type'
            ]);

            return $isValid;
        } catch(\Exception $e) {
            $this->update([
                'is_valid' => false,
                'error_message' => $e->getMessage()
            ]);

            return false;

        }
    }
}
