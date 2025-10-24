<?php

namespace App\Filament\Resources\Tanjungkamunings;

use App\Filament\Resources\Tanjungkamunings\Pages\CreateTanjungkamuning;
use App\Filament\Resources\Tanjungkamunings\Pages\EditTanjungkamuning;
use App\Filament\Resources\Tanjungkamunings\Pages\ListTanjungkamunings;
use App\Filament\Resources\Tanjungkamunings\Schemas\TanjungkamuningForm;
use App\Filament\Resources\Tanjungkamunings\Tables\TanjungkamuningsTable;
use App\Models\Tanjungkamuning;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TanjungkamuningResource extends Resource
{
    protected static ?string $model = Tanjungkamuning::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    public static function form(Schema $schema): Schema
    {
        return TanjungkamuningForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TanjungkamuningsTable::configure($table);
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
            'index' => ListTanjungkamunings::route('/'),
            'create' => CreateTanjungkamuning::route('/create'),
            'edit' => EditTanjungkamuning::route('/{record}/edit'),
        ];
    }
}
