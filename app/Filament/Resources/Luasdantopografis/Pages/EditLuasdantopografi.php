<?php

namespace App\Filament\Resources\Luasdantopografis\Pages;

use App\Filament\Resources\Luasdantopografis\LuasdantopografiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLuasdantopografi extends EditRecord
{
    protected static string $resource = LuasdantopografiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
