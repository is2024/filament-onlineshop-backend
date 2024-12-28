<?php

namespace App\Filament\Resources\RajaongkirSettingResource\Pages;

use App\Filament\Resources\RajaongkirSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRajaongkirSetting extends EditRecord
{
    protected static string $resource = RajaongkirSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
