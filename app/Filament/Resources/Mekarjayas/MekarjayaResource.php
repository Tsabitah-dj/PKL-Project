<?php

namespace App\Filament\Resources\Mekarjayas;

use App\Filament\Resources\Mekarjayas\Pages\CreateMekarjaya;
use App\Filament\Resources\Mekarjayas\Pages\EditMekarjaya;
use App\Filament\Resources\Mekarjayas\Pages\ListMekarjayas;
use App\Filament\Resources\Mekarjayas\Schemas\MekarjayaForm;
use App\Filament\Resources\Mekarjayas\Tables\MekarjayasTable;
use App\Models\Mekarjaya;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MekarjayaResource extends Resource
{
    protected static ?string $model = Mekarjaya::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|\UnitEnum|null $navigationGroup = 'Data Desa';
 
    public static function form(Schema $schema): Schema
    {
        return MekarjayaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MekarjayasTable::configure($table);
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
            'index' => ListMekarjayas::route('/'),
            'create' => CreateMekarjaya::route('/create'),
            'edit' => EditMekarjaya::route('/{record}/edit'),
        ];
    }
}
