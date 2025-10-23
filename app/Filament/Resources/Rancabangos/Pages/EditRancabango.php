<?php

namespace App\Filament\Resources\Rancabangos\Pages;

use App\Filament\Resources\Rancabangos\RancabangoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRancabango extends EditRecord
{
    protected static string $resource = RancabangoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
