<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RajaongkirSettingResource\Pages;
use App\Filament\Resources\RajaongkirSettingResource\RelationManagers;
use App\Models\RajaongkirSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
class RajaongkirSettingResource extends Resource
{
    protected static ?string $model = RajaongkirSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static array $starterCouriers = ['jne', 'pos', 'tiki'];
    protected static array $courierOptions = [
        'jne' => 'JNE',
        'pos' => 'POS Indonesia',
        'tiki' => 'TIKI',
        'rpx' => 'RPX',
        'pandu' => 'Pandu',
        'wahana' => 'Wahana',
        'sicepat' => 'SiCepat',
        'jnt' => 'J&T',
        'pahala' => 'Pahala',
        'sap' => 'SAP',
        'jet' => 'JET Express',
        'indah' => 'Indah Cargo',
        'dse' => 'DSE',
        'slis' => 'Solusi Express',
        'first' => 'First Logistics',
        'ncs' => 'NCS',
        'star' => 'Star Cargo',
        'ninja' => 'Ninja Express',
        'lion' => 'Lion Parcel',
        'idl' => 'IDL',
        'rex' => 'REX',
        'ide' => 'IDE Express',
        'sentral' => 'Sentral Cargo',
        'anteraja' => 'AnterAja',
        'jtl' => 'JTL Express'
    ];
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Basic Information')
                ->schema([
                    Forms\Components\TextInput::make('api_key')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('api_type')
                        ->options([
                            'starter' => 'Starter',
                            'pro' => 'Pro'
                        ])
                        ->default('starter')
                        ->live()
                        ->afterStateUpdated(function (string $state, Forms\Set $set) {
                            if ($state == 'starter') {
                                $set('couriers', static::$starterCouriers);
                            }
                        })
                        ->required(),
                    Forms\Components\Select::make('couriers')
                        ->multiple()
                        ->required()
                        ->options(fn (Forms\Get $get) => $get('api_type') === 'pro'
                            ? static::$courierOptions
                            : array_intersect_key(static::$courierOptions, array_flip(static::$starterCouriers)))
                        ->default(static::$starterCouriers)
                        ->helperText(fn (Forms\Get $get) => $get('api_type') === 'starter'
                            ? 'Starter API only supports JNE, POS, and TIKI'
                            : 'Select the couriers you want to enable')
                        ->dehydrateStateUsing(fn (array $state) => implode(':', array_map('strtolower', $state)))
                        ->beforeStateDehydrated(function ($state, ?RajaongkirSetting $record, Forms\Get $get) {
                            if ($record && $get('api_type') === 'starter') {
                                $record->couriers = implode(':', static::$starterCouriers);
                            }
                        })
                        ->afterStateHydrated(function (Forms\Components\Select $component, $state) {
                            if (is_string($state)) {
                                $component->state(explode(':', $state));
                            }
                        }),

                ])


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('api_key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('api_type'),
                Tables\Columns\TextColumn::make('couriers')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_valid')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('validate')
                    ->label('Test API')
                    ->icon('heroicon-o-arrow-path')
                    ->action(function (RajaongkirSetting $record) {
                        if ($record->validateApiKey()) {
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
                    })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRajaongkirSettings::route('/'),
            'create' => Pages\CreateRajaongkirSetting::route('/create'),
            'edit' => Pages\EditRajaongkirSetting::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return RajaongkirSetting::count() < 1;
    }
}
