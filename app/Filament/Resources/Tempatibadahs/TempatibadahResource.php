<?php

namespace App\Filament\Resources\Tempatibadahs;

use App\Filament\Resources\Tempatibadahs\Pages\CreateTempatibadah;
use App\Filament\Resources\Tempatibadahs\Pages\EditTempatibadah;
use App\Filament\Resources\Tempatibadahs\Pages\ListTempatibadahs;
use App\Filament\Resources\Tempatibadahs\Schemas\TempatibadahForm;
use App\Filament\Resources\Tempatibadahs\Tables\TempatibadahsTable;
use App\Models\Tempatibadah;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TempatibadahResource extends Resource
{
    protected static ?string $model = Tempatibadah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Data Tempat Ibadah';

    protected static string|\UnitEnum|null $navigationGroup = 'Monografi';

    public static function form(Schema $schema): Schema
    {
        return TempatibadahForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TempatibadahsTable::configure($table);
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
            'index' => ListTempatibadahs::route('/'),
            'create' => CreateTempatibadah::route('/create'),
            'edit' => EditTempatibadah::route('/{record}/edit'),
        ];
    }
}
