<?php

namespace App\Filament\Resources\Pasawahans;

use App\Filament\Resources\Pasawahans\Pages\CreatePasawahan;
use App\Filament\Resources\Pasawahans\Pages\EditPasawahan;
use App\Filament\Resources\Pasawahans\Pages\ListPasawahans;
use App\Filament\Resources\Pasawahans\Schemas\PasawahanForm;
use App\Filament\Resources\Pasawahans\Tables\PasawahansTable;
use App\Models\Pasawahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PasawahanResource extends Resource
{
    protected static ?string $model = Pasawahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PasawahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PasawahansTable::configure($table);
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
            'index' => ListPasawahans::route('/'),
            'create' => CreatePasawahan::route('/create'),
            'edit' => EditPasawahan::route('/{record}/edit'),
        ];
    }
}
