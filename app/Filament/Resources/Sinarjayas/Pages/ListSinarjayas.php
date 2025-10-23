<?php

namespace App\Filament\Resources\Sinarjayas\Pages;

use App\Filament\Resources\Sinarjayas\SinarjayaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSinarjayas extends ListRecords
{
    protected static string $resource = SinarjayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
