<?php

namespace App\Filament\Resources\RoutersResource\Pages;

use App\Filament\Resources\RoutersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRouters extends ListRecords
{
    protected static string $resource = RoutersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
