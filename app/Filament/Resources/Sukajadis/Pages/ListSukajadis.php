<?php

namespace App\Filament\Resources\Sukajadis\Pages;

use App\Filament\Resources\Sukajadis\SukajadiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSukajadis extends ListRecords
{
    protected static string $resource = SukajadiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
