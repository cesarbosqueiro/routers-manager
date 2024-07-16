<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoutersResource\Pages;
use App\Filament\Resources\RoutersResource\RelationManagers;
use App\Models\Routers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoutersResource extends Resource
{
    protected static ?string $model = Routers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('ipv4')
                    ->required(),
                Forms\Components\TextInput::make('ipv6'),
                Forms\Components\TextInput::make('username')
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(),
                Forms\Components\TextInput::make('secret_radius'),
                Forms\Components\TextInput::make('port')
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->required(),
                Forms\Components\TextInput::make('vendor'),
                Forms\Components\TextInput::make('model'),
                Forms\Components\TextInput::make('firmware'),
                Forms\Components\TextInput::make('software'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ipv4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ipv6')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('secret_radius')
                    ->searchable(),
                Tables\Columns\TextColumn::make('port')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vendor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('firmware')
                    ->searchable(),
                Tables\Columns\TextColumn::make('software')
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
            'index' => Pages\ListRouters::route('/'),
            'edit' => Pages\EditRouters::route('/{record}/edit'),
        ];
    }
}
