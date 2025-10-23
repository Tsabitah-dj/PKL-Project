<?php

namespace App\Filament\Resources\Panjiwangis\Pages;

use App\Filament\Resources\Panjiwangis\PanjiwangiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPanjiwangis extends ListRecords
{
    protected static string $resource = PanjiwangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
