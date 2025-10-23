<?php

namespace App\Filament\Resources\Tempatibadahs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TempatibadahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nm_tempatibadah')
                    ->required(),
                TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }
}
