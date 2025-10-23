<?php

namespace App\Filament\Resources\Sukajadis\Pages;

use App\Filament\Resources\Sukajadis\SukajadiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSukajadi extends EditRecord
{
    protected static string $resource = SukajadiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
