<?php

namespace App\Filament\Resources\Luasdantopografis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LuasdantopografiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('aspek')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
            ]);
    }
}
