<?php

namespace App\Filament\Resources\Usia5terbanyaks\Pages;

use App\Filament\Resources\Usia5terbanyaks\Usia5terbanyakResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUsia5terbanyaks extends ListRecords
{
    protected static string $resource = Usia5terbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
