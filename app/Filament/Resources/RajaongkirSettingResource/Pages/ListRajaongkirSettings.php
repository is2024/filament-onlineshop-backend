<?php

namespace App\Filament\Resources\RajaongkirSettingResource\Pages;

use App\Filament\Resources\RajaongkirSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRajaongkirSettings extends ListRecords
{
    protected static string $resource = RajaongkirSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
