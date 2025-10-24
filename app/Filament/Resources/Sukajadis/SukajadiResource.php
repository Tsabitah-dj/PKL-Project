<?php

namespace App\Filament\Resources\Sukajadis;

use App\Filament\Resources\Sukajadis\Pages\CreateSukajadi;
use App\Filament\Resources\Sukajadis\Pages\EditSukajadi;
use App\Filament\Resources\Sukajadis\Pages\ListSukajadis;
use App\Filament\Resources\Sukajadis\Schemas\SukajadiForm;
use App\Filament\Resources\Sukajadis\Tables\SukajadisTable;
use App\Models\Sukajadi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SukajadiResource extends Resource
{
    protected static ?string $model = Sukajadi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    public static function form(Schema $schema): Schema
    {
        return SukajadiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SukajadisTable::configure($table);
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
            'index' => ListSukajadis::route('/'),
            'create' => CreateSukajadi::route('/create'),
            'edit' => EditSukajadi::route('/{record}/edit'),
        ];
    }
}
