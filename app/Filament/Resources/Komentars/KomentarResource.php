<?php

namespace App\Filament\Resources\Komentars;

use App\Filament\Resources\Komentars\Pages\CreateKomentar;
use App\Filament\Resources\Komentars\Pages\EditKomentar;
use App\Filament\Resources\Komentars\Pages\ListKomentars;
use App\Filament\Resources\Komentars\Schemas\KomentarForm;
use App\Filament\Resources\Komentars\Tables\KomentarsTable;
use App\Models\Komentar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KomentarResource extends Resource
{
    protected static ?string $model = Komentar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Komentar';

     protected static string|\UnitEnum|null $navigationGroup = 'Konten Website';

    public static function form(Schema $schema): Schema
    {
        return KomentarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KomentarsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKomentars::route('/'),
            'create' => CreateKomentar::route('/create'),
            'edit' => EditKomentar::route('/{record}/edit'),
        ];
    }
}
