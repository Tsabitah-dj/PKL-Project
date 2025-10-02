<?php

namespace App\Filament\Resources\Komentars\Pages;

use App\Filament\Resources\Komentars\KomentarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKomentar extends EditRecord
{
    protected static string $resource = KomentarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
