<?php

namespace App\Filament\Resources\Skms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                Textarea::make('penilaian')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('nilai')
                    ->required()
                    ->numeric(),
                Textarea::make('saran')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
