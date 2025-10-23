<?php

namespace App\Filament\Resources\Mekarwangis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MekarwangiForm
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
