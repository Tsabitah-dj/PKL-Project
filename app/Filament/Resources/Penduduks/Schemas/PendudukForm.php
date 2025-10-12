<?php

namespace App\Filament\Resources\Penduduks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PendudukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori')
                    ->required(),
                TextInput::make('jumlah')
                    ->required(),
            ]);
    }
}
