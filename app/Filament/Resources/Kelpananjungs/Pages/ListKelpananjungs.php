<?php

namespace App\Filament\Resources\Kelpananjungs\Pages;

use App\Filament\Resources\Kelpananjungs\KelpananjungResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKelpananjungs extends ListRecords
{
    protected static string $resource = KelpananjungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
