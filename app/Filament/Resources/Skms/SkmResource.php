<?php

namespace App\Filament\Resources\Skms;

use App\Filament\Resources\Skms\Pages\CreateSkm;
use App\Filament\Resources\Skms\Pages\EditSkm;
use App\Filament\Resources\Skms\Pages\ListSkms;
use App\Filament\Resources\Skms\Schemas\SkmForm;
use App\Filament\Resources\Skms\Tables\SkmsTable;
use App\Models\Skm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkmResource extends Resource
{
    protected static ?string $model = Skm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SkmForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkmsTable::configure($table);
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
            'index' => ListSkms::route('/'),
            'create' => CreateSkm::route('/create'),
            'edit' => EditSkm::route('/{record}/edit'),
        ];
    }
}
