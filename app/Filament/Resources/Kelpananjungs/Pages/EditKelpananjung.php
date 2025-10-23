<?php

namespace App\Filament\Resources\Kelpananjungs\Pages;

use App\Filament\Resources\Kelpananjungs\KelpananjungResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKelpananjung extends EditRecord
{
    protected static string $resource = KelpananjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
