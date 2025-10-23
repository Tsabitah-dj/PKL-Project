<?php

namespace App\Filament\Resources\Tanjungkamunings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TanjungkamuningForm
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
