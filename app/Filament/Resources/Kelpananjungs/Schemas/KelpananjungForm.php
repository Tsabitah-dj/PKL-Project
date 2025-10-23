<?php

namespace App\Filament\Resources\Kelpananjungs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KelpananjungForm
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
