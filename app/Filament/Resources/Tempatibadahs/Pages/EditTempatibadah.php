<?php

namespace App\Filament\Resources\Tempatibadahs\Pages;

use App\Filament\Resources\Tempatibadahs\TempatibadahResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTempatibadah extends EditRecord
{
    protected static string $resource = TempatibadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
