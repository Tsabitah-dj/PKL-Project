<?php

namespace App\Filament\Resources\Sukawangis\Pages;

use App\Filament\Resources\Sukawangis\SukawangiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSukawangis extends ListRecords
{
    protected static string $resource = SukawangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
