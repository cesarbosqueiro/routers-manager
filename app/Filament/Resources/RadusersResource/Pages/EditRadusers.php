<?php

namespace App\Filament\Resources\RadusersResource\Pages;

use App\Filament\Resources\RadusersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadusers extends EditRecord
{
    protected static string $resource = RadusersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
