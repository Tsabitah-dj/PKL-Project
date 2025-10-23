<?php

namespace App\Filament\Resources\Tempatibadahs\Pages;

use App\Filament\Resources\Tempatibadahs\TempatibadahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTempatibadahs extends ListRecords
{
    protected static string $resource = TempatibadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
