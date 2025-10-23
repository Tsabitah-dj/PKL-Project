<?php

namespace App\Filament\Resources\Ketdesas;

use App\Filament\Resources\Ketdesas\Pages\CreateKetdesa;
use App\Filament\Resources\Ketdesas\Pages\EditKetdesa;
use App\Filament\Resources\Ketdesas\Pages\ListKetdesas;
use App\Filament\Resources\Ketdesas\Schemas\KetdesaForm;
use App\Filament\Resources\Ketdesas\Tables\KetdesasTable;
use App\Models\Ketdesa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KetdesaResource extends Resource
{
    protected static ?string $model = Ketdesa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    protected static ?string $navigationLabel = 'Cimanganten';


    public static function form(Schema $schema): Schema
    {
        return KetdesaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KetdesasTable::configure($table);
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
            'index' => ListKetdesas::route('/'),
            'create' => CreateKetdesa::route('/create'),
            'edit' => EditKetdesa::route('/{record}/edit'),
        ];
    }
}
