<?php

namespace App\Filament\Resources\Langensaris;

use App\Filament\Resources\Langensaris\Pages\CreateLangensari;
use App\Filament\Resources\Langensaris\Pages\EditLangensari;
use App\Filament\Resources\Langensaris\Pages\ListLangensaris;
use App\Filament\Resources\Langensaris\Schemas\LangensariForm;
use App\Filament\Resources\Langensaris\Tables\LangensarisTable;
use App\Models\Langensari;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LangensariResource extends Resource
{
    protected static ?string $model = Langensari::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LangensariForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LangensarisTable::configure($table);
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
            'index' => ListLangensaris::route('/'),
            'create' => CreateLangensari::route('/create'),
            'edit' => EditLangensari::route('/{record}/edit'),
        ];
    }
}
