<?php

namespace App\Filament\Resources\RadusersResource\Pages;

use App\Filament\Resources\RadusersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadusers extends ListRecords
{
    protected static string $resource = RadusersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
