<?php

namespace App\Filament\Resources\Jatis;

use App\Filament\Resources\Jatis\Pages\CreateJati;
use App\Filament\Resources\Jatis\Pages\EditJati;
use App\Filament\Resources\Jatis\Pages\ListJatis;
use App\Filament\Resources\Jatis\Schemas\JatiForm;
use App\Filament\Resources\Jatis\Tables\JatisTable;
use App\Models\Jati;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JatiResource extends Resource
{
    protected static ?string $model = Jati::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    protected static ?string $navigationLabel = 'Desa Jati';

    public static function form(Schema $schema): Schema
    {
        return JatiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JatisTable::configure($table);
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
            'index' => ListJatis::route('/'),
            'create' => CreateJati::route('/create'),
            'edit' => EditJati::route('/{record}/edit'),
        ];
    }
}
