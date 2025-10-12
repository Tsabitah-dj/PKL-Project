<?php

namespace App\Filament\Resources\Berdasarkanagamas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BerdasarkanagamaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_agama')
                    ->required(),
                TextInput::make('persentase')
                    ->required(),
            ]);
    }
}
