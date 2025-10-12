<?php

namespace App\Filament\Resources\Berdasarkanagamas;

use App\Filament\Resources\Berdasarkanagamas\Pages\CreateBerdasarkanagama;
use App\Filament\Resources\Berdasarkanagamas\Pages\EditBerdasarkanagama;
use App\Filament\Resources\Berdasarkanagamas\Pages\ListBerdasarkanagamas;
use App\Filament\Resources\Berdasarkanagamas\Schemas\BerdasarkanagamaForm;
use App\Filament\Resources\Berdasarkanagamas\Tables\BerdasarkanagamasTable;
use App\Models\Berdasarkanagama;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BerdasarkanagamaResource extends Resource
{
    protected static ?string $model = Berdasarkanagama::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Penduduk Berdasarkan Agama';

    protected static string|\UnitEnum|null $navigationGroup = 'Monografi';


    public static function form(Schema $schema): Schema
    {
        return BerdasarkanagamaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BerdasarkanagamasTable::configure($table);
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
            'index' => ListBerdasarkanagamas::route('/'),
            'create' => CreateBerdasarkanagama::route('/create'),
            'edit' => EditBerdasarkanagama::route('/{record}/edit'),
        ];
    }
}
