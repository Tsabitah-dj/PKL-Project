<?php

namespace App\Filament\Resources\Sinarjayas;

use App\Filament\Resources\Sinarjayas\Pages\CreateSinarjaya;
use App\Filament\Resources\Sinarjayas\Pages\EditSinarjaya;
use App\Filament\Resources\Sinarjayas\Pages\ListSinarjayas;
use App\Filament\Resources\Sinarjayas\Schemas\SinarjayaForm;
use App\Filament\Resources\Sinarjayas\Tables\SinarjayasTable;
use App\Models\Sinarjaya;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SinarjayaResource extends Resource
{
    protected static ?string $model = Sinarjaya::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SinarjayaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SinarjayasTable::configure($table);
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
            'index' => ListSinarjayas::route('/'),
            'create' => CreateSinarjaya::route('/create'),
            'edit' => EditSinarjaya::route('/{record}/edit'),
        ];
    }
}
