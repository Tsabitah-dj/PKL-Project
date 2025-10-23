<?php

namespace App\Filament\Resources\Mekarwangis\Pages;

use App\Filament\Resources\Mekarwangis\MekarwangiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMekarwangis extends ListRecords
{
    protected static string $resource = MekarwangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
