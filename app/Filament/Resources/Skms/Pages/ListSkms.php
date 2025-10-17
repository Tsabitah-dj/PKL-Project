<?php

namespace App\Filament\Resources\Skms\Pages;

use App\Filament\Resources\Skms\SkmResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSkms extends ListRecords
{
    protected static string $resource = SkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
