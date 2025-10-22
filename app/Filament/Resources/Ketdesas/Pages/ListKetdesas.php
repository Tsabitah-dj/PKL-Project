<?php

namespace App\Filament\Resources\Ketdesas\Pages;

use App\Filament\Resources\Ketdesas\KetdesaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKetdesas extends ListRecords
{
    protected static string $resource = KetdesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
