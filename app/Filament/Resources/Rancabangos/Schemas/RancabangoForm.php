<?php

namespace App\Filament\Resources\Rancabangos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RancabangoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori')
                    ->required(),
                TextInput::make('keterangan')
                    ->required(),
            ]);
    }
}
