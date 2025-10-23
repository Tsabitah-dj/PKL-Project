<?php

namespace App\Filament\Resources\Sukawangis\Pages;

use App\Filament\Resources\Sukawangis\SukawangiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSukawangi extends EditRecord
{
    protected static string $resource = SukawangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
