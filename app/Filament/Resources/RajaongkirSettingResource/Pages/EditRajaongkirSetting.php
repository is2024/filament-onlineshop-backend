<?php

namespace App\Filament\Resources\RajaongkirSettingResource\Pages;

use App\Filament\Resources\RajaongkirSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditRajaongkirSetting extends EditRecord
{
    protected static string $resource = RajaongkirSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $isValid = $this->record->validateApiKey();

        if ($isValid) {
            Notification::make()
                ->title('API Key is valid !!')
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title('API Key is invalid !!')
                ->danger()
                ->body($record->error_message ?? 'Unknown error')
                ->send();
        }

    }

}
