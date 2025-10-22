<?php

namespace App\Filament\Resources\Ketdesas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KetdesaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Textarea::make('kategori')
                    ->required(),
                Textarea::make('keterangan')
                    ->required(),
            ]);
    }
}
