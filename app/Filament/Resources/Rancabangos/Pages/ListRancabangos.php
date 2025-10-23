<?php

namespace App\Filament\Resources\Rancabangos\Pages;

use App\Filament\Resources\Rancabangos\RancabangoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRancabangos extends ListRecords
{
    protected static string $resource = RancabangoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
