<?php

namespace App\Filament\Resources\Panjiwangis\Pages;

use App\Filament\Resources\Panjiwangis\PanjiwangiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPanjiwangi extends EditRecord
{
    protected static string $resource = PanjiwangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
