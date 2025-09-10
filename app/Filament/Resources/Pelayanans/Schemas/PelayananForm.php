<?php

namespace App\Filament\Resources\Pelayanans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PelayananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gambar')
                   ->image()
                   ->directory('pelayanan') // otomatis simpan di storage/app/public/pelayanan
                   ->disk('public')         // simpan ke disk public
                    ->maxSize(2048)
                   ->required(),
                TextInput::make('nama_pelayanan')
                   ->required(),
            ]);
    }
}
