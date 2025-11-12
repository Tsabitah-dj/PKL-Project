<?php

namespace App\Filament\Resources\Skms\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SkmsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                ->label('Nama User')
                ->sortable()
                ->searchable(),
                TextColumn::make('pertanyaan1')
                    ->searchable(),
                TextColumn::make('pertanyaan2')
                    ->searchable(),
                TextColumn::make('pertanyaan3')
                    ->searchable(),
                TextColumn::make('pertanyaan4')
                    ->searchable(),
                TextColumn::make('pertanyaan5')
                    ->searchable(),
                TextColumn::make('pertanyaan6')
                    ->searchable(),
                TextColumn::make('pertanyaan7')
                    ->searchable(),
                TextColumn::make('pertanyaan8')
                    ->searchable(),
                TextColumn::make('pertanyaan9')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
