<?php

namespace App\Filament\Resources\Tanjungkamunings\Pages;

use App\Filament\Resources\Tanjungkamunings\TanjungkamuningResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTanjungkamunings extends ListRecords
{
    protected static string $resource = TanjungkamuningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
