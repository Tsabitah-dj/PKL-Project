<?php

namespace App\Filament\Resources\Luasdantopografis\Pages;

use App\Filament\Resources\Luasdantopografis\LuasdantopografiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLuasdantopografis extends ListRecords
{
    protected static string $resource = LuasdantopografiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
