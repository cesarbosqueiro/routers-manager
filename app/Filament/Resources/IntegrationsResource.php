<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntegrationsResource\Pages;
use App\Filament\Resources\IntegrationsResource\RelationManagers;
use App\Models\Integrations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IntegrationsResource extends Resource
{
    protected static ?string $model = Integrations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('software')
                    ->required(),
                Forms\Components\TextInput::make('url'),
                Forms\Components\TextInput::make('token'),
                Forms\Components\TextInput::make('secret'),
                Forms\Components\TextInput::make('username'),
                Forms\Components\TextInput::make('password')
                    ->password(),
                Forms\Components\TextInput::make('database'),
                Forms\Components\TextInput::make('synchronized_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('software')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('token')
                    ->searchable(),
                Tables\Columns\TextColumn::make('secret')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('database')
                    ->searchable(),
                Tables\Columns\TextColumn::make('synchronized_at')
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
            'index' => Pages\ListIntegrations::route('/'),
            'edit' => Pages\EditIntegrations::route('/{record}/edit'),
        ];
    }
}
