<?php

namespace App\Filament\Resources\Rancabangos;

use App\Filament\Resources\Rancabangos\Pages\CreateRancabango;
use App\Filament\Resources\Rancabangos\Pages\EditRancabango;
use App\Filament\Resources\Rancabangos\Pages\ListRancabangos;
use App\Filament\Resources\Rancabangos\Schemas\RancabangoForm;
use App\Filament\Resources\Rancabangos\Tables\RancabangosTable;
use App\Models\Rancabango;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RancabangoResource extends Resource
{
    protected static ?string $model = Rancabango::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return RancabangoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RancabangosTable::configure($table);
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
            'index' => ListRancabangos::route('/'),
            'create' => CreateRancabango::route('/create'),
            'edit' => EditRancabango::route('/{record}/edit'),
        ];
    }
}
