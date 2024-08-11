<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeviceResource\Pages;
use App\Filament\Resources\DeviceResource\RelationManagers;
use App\Models\Device;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeviceResource extends Resource
{
    protected static ?string $model = Device::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->preload()
                    ->searchable()
                    ->relationship('category', 'name'),
                Forms\Components\Select::make('brand_id')
                    ->preload()
                    ->searchable()
                    ->relationship('brand', 'name'),
                Forms\Components\TextInput::make('model_number')
                    ->required(),
                Forms\Components\TextInput::make('series')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('description'),                    
                Forms\Components\Repeater::make('specifications')
                    ->relationship()
                    ->columnSpan('full')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('key'),
                        Forms\Components\TextInput::make('value'),
                    ]),
                Forms\Components\Repeater::make('features')
                    ->relationship()
                    ->columnSpan('full')
                    // ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('feature'),                        
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('model_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('series')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
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
            'index' => Pages\ListDevices::route('/'),
            'create' => Pages\CreateDevice::route('/create'),
            'edit' => Pages\EditDevice::route('/{record}/edit'),
        ];
    }
}
