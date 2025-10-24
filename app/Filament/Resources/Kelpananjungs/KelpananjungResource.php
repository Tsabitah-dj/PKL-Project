<?php

namespace App\Filament\Resources\Kelpananjungs;

use App\Filament\Resources\Kelpananjungs\Pages\CreateKelpananjung;
use App\Filament\Resources\Kelpananjungs\Pages\EditKelpananjung;
use App\Filament\Resources\Kelpananjungs\Pages\ListKelpananjungs;
use App\Filament\Resources\Kelpananjungs\Schemas\KelpananjungForm;
use App\Filament\Resources\Kelpananjungs\Tables\KelpananjungsTable;
use App\Models\Kelpananjung;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KelpananjungResource extends Resource
{
    protected static ?string $model = Kelpananjung::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';

    public static function form(Schema $schema): Schema
    {
        return KelpananjungForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KelpananjungsTable::configure($table);
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
            'index' => ListKelpananjungs::route('/'),
            'create' => CreateKelpananjung::route('/create'),
            'edit' => EditKelpananjung::route('/{record}/edit'),
        ];
    }
}
