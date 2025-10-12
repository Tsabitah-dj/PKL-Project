<?php

namespace App\Filament\Resources\Usia5terbanyaks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class Usia5terbanyakForm
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
