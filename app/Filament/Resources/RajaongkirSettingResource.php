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

class RajaongkirSettingResource extends Resource
{
    protected static ?string $model = RajaongkirSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('api_key')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('api_type')
                    ->required(),
                Forms\Components\TextInput::make('couriers')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('is_valid')
                    ->required(),
                Forms\Components\Textarea::make('error_message')
                    ->columnSpanFull(),
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
}
