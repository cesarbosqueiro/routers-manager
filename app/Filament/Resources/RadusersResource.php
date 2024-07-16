<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadusersResource\Pages;
use App\Filament\Resources\RadusersResource\RelationManagers;
use App\Models\Radusers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadusersResource extends Resource
{
    protected static ?string $model = Radusers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->required(),
                Forms\Components\DateTimePicker::make('connectionStartAt')
                    ->required(),
                Forms\Components\DateTimePicker::make('connectionEndAt'),
                Forms\Components\TextInput::make('macAddress'),
                Forms\Components\TextInput::make('ipAddress'),
                Forms\Components\TextInput::make('nasIpAddress'),
                Forms\Components\TextInput::make('nasPortId'),
                Forms\Components\TextInput::make('nasPortType'),
                Forms\Components\TextInput::make('serviceType'),
                Forms\Components\TextInput::make('framedProtocol'),
                Forms\Components\TextInput::make('framedIpAddress'),
                Forms\Components\TextInput::make('framedIpv6Prefix'),
                Forms\Components\TextInput::make('framedIpv6Pool'),
                Forms\Components\TextInput::make('framedIpv6Address'),
                Forms\Components\TextInput::make('framedIpv6Route'),
                Forms\Components\TextInput::make('framedIpv6PrefixLength'),
                Forms\Components\TextInput::make('framedIpv6InterfaceId'),
                Forms\Components\TextInput::make('framedIpv6LocalPool'),
                Forms\Components\TextInput::make('framedIpv6RemotePool'),
                Forms\Components\TextInput::make('framedIpv6PrefixPool'),
                Forms\Components\TextInput::make('framedIpv6PrefixRoute'),
                Forms\Components\TextInput::make('framedIpv6PrefixLengthPool'),
                Forms\Components\TextInput::make('framedIpv6PrefixInterfaceIdPool'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('connectionStartAt')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('connectionEndAt')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('macAddress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ipAddress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nasIpAddress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nasPortId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nasPortType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serviceType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedProtocol')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpAddress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6Prefix')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6Pool')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6Address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6Route')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6PrefixLength')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6InterfaceId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6LocalPool')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6RemotePool')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6PrefixPool')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6PrefixRoute')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6PrefixLengthPool')
                    ->searchable(),
                Tables\Columns\TextColumn::make('framedIpv6PrefixInterfaceIdPool')
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
            'index' => Pages\ListRadusers::route('/'),
            'edit' => Pages\EditRadusers::route('/{record}/edit'),
        ];
    }
}
