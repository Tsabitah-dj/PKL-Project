<?php

namespace App\Filament\Resources\Berdasarkanagamas\Pages;

use App\Filament\Resources\Berdasarkanagamas\BerdasarkanagamaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBerdasarkanagamas extends ListRecords
{
    protected static string $resource = BerdasarkanagamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
