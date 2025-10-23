<?php

namespace App\Filament\Resources\Jatis\Pages;

use App\Filament\Resources\Jatis\JatiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJatis extends ListRecords
{
    protected static string $resource = JatiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
