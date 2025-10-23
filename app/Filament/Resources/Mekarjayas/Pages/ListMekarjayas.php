<?php

namespace App\Filament\Resources\Mekarjayas\Pages;

use App\Filament\Resources\Mekarjayas\MekarjayaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMekarjayas extends ListRecords
{
    protected static string $resource = MekarjayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
