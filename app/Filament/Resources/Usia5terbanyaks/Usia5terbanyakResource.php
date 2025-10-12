<?php

namespace App\Filament\Resources\Usia5terbanyaks;

use App\Filament\Resources\Usia5terbanyaks\Pages\CreateUsia5terbanyak;
use App\Filament\Resources\Usia5terbanyaks\Pages\EditUsia5terbanyak;
use App\Filament\Resources\Usia5terbanyaks\Pages\ListUsia5terbanyaks;
use App\Filament\Resources\Usia5terbanyaks\Schemas\Usia5terbanyakForm;
use App\Filament\Resources\Usia5terbanyaks\Tables\Usia5terbanyaksTable;
use App\Models\Usia5terbanyak;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Usia5terbanyakResource extends Resource
{
    protected static ?string $model = Usia5terbanyak::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Penduduk Rentang Usia Terbanyak';

    protected static string|\UnitEnum|null $navigationGroup = 'Monografi';

    public static function form(Schema $schema): Schema
    {
        return Usia5terbanyakForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Usia5terbanyaksTable::configure($table);
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
            'index' => ListUsia5terbanyaks::route('/'),
            'create' => CreateUsia5terbanyak::route('/create'),
            'edit' => EditUsia5terbanyak::route('/{record}/edit'),
        ];
    }
}
