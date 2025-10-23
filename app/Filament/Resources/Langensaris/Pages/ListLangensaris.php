<?php

namespace App\Filament\Resources\Langensaris\Pages;

use App\Filament\Resources\Langensaris\LangensariResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLangensaris extends ListRecords
{
    protected static string $resource = LangensariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
