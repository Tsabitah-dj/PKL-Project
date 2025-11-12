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
                    ->required()
                    ->numeric(),
                TextInput::make('pertanyaan1')
                    ->required(),
                TextInput::make('pertanyaan2')
                    ->required(),
                TextInput::make('pertanyaan3')
                    ->required(),
                TextInput::make('pertanyaan4')
                    ->required(),
                TextInput::make('pertanyaan5')
                    ->required(),
                TextInput::make('pertanyaan6')
                    ->required(),
                TextInput::make('pertanyaan7')
                    ->required(),
                TextInput::make('pertanyaan8')
                    ->required(),
                TextInput::make('pertanyaan9')
                    ->required(),
                Textarea::make('saran')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
