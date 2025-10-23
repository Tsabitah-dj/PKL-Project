<?php

namespace App\Filament\Resources\Mekarwangis;

use App\Filament\Resources\Mekarwangis\Pages\CreateMekarwangi;
use App\Filament\Resources\Mekarwangis\Pages\EditMekarwangi;
use App\Filament\Resources\Mekarwangis\Pages\ListMekarwangis;
use App\Filament\Resources\Mekarwangis\Schemas\MekarwangiForm;
use App\Filament\Resources\Mekarwangis\Tables\MekarwangisTable;
use App\Models\Mekarwangi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MekarwangiResource extends Resource
{
    protected static ?string $model = Mekarwangi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MekarwangiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MekarwangisTable::configure($table);
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
            'index' => ListMekarwangis::route('/'),
            'create' => CreateMekarwangi::route('/create'),
            'edit' => EditMekarwangi::route('/{record}/edit'),
        ];
    }
}
