<?php

namespace App\Filament\Resources\Pegawais\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PegawaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('foto')
                    ->image()
                    ->disk('public')
                    ->directory('pegawai') // simpan di storage/app/public/berita
                    ->required(),
                Textarea::make('keterangan')
                    ->required(),
            ]);
    }
}
