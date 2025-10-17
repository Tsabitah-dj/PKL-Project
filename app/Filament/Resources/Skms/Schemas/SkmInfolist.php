<?php

namespace App\Filament\Resources\Skms\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SkmInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('penilaian')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('nilai')
                    ->numeric(),
                TextEntry::make('saran')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
