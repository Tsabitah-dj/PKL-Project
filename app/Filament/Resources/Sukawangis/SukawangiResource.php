<?php

namespace App\Filament\Resources\Sukawangis;

use App\Filament\Resources\Sukawangis\Pages\CreateSukawangi;
use App\Filament\Resources\Sukawangis\Pages\EditSukawangi;
use App\Filament\Resources\Sukawangis\Pages\ListSukawangis;
use App\Filament\Resources\Sukawangis\Schemas\SukawangiForm;
use App\Filament\Resources\Sukawangis\Tables\SukawangisTable;
use App\Models\Sukawangi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SukawangiResource extends Resource
{
    protected static ?string $model = Sukawangi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    public static function form(Schema $schema): Schema
    {
        return SukawangiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SukawangisTable::configure($table);
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
            'index' => ListSukawangis::route('/'),
            'create' => CreateSukawangi::route('/create'),
            'edit' => EditSukawangi::route('/{record}/edit'),
        ];
    }
}
