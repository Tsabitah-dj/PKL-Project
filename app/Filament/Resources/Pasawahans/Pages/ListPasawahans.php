<?php

namespace App\Filament\Resources\Pasawahans\Pages;

use App\Filament\Resources\Pasawahans\PasawahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPasawahans extends ListRecords
{
    protected static string $resource = PasawahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
