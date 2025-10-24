<?php

namespace App\Filament\Resources\Panjiwangis;

use App\Filament\Resources\Panjiwangis\Pages\CreatePanjiwangi;
use App\Filament\Resources\Panjiwangis\Pages\EditPanjiwangi;
use App\Filament\Resources\Panjiwangis\Pages\ListPanjiwangis;
use App\Filament\Resources\Panjiwangis\Schemas\PanjiwangiForm;
use App\Filament\Resources\Panjiwangis\Tables\PanjiwangisTable;
use App\Models\Panjiwangi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PanjiwangiResource extends Resource
{
    protected static ?string $model = Panjiwangi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    public static function form(Schema $schema): Schema
    {
        return PanjiwangiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PanjiwangisTable::configure($table);
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
            'index' => ListPanjiwangis::route('/'),
            'create' => CreatePanjiwangi::route('/create'),
            'edit' => EditPanjiwangi::route('/{record}/edit'),
        ];
    }
}
