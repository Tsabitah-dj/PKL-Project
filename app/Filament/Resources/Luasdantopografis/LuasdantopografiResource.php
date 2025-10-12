<?php

namespace App\Filament\Resources\Luasdantopografis;

use App\Filament\Resources\Luasdantopografis\Pages\CreateLuasdantopografi;
use App\Filament\Resources\Luasdantopografis\Pages\EditLuasdantopografi;
use App\Filament\Resources\Luasdantopografis\Pages\ListLuasdantopografis;
use App\Filament\Resources\Luasdantopografis\Schemas\LuasdantopografiForm;
use App\Filament\Resources\Luasdantopografis\Tables\LuasdantopografisTable;
use App\Models\Luasdantopografi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LuasdantopografiResource extends Resource
{
    protected static ?string $model = Luasdantopografi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Luas Dan Topografi';

   protected static string|\UnitEnum|null $navigationGroup = 'Monografi';

    public static function form(Schema $schema): Schema
    {
        return LuasdantopografiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LuasdantopografisTable::configure($table);
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
            'index' => ListLuasdantopografis::route('/'),
            'create' => CreateLuasdantopografi::route('/create'),
            'edit' => EditLuasdantopografi::route('/{record}/edit'),
        ];
    }
}
