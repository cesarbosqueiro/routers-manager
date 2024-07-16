<?php

namespace App\Filament\Resources\RoutersResource\Pages;

use App\Filament\Resources\RoutersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRouters extends EditRecord
{
    protected static string $resource = RoutersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
