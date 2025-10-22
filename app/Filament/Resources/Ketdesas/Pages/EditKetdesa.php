<?php

namespace App\Filament\Resources\Ketdesas\Pages;

use App\Filament\Resources\Ketdesas\KetdesaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKetdesa extends EditRecord
{
    protected static string $resource = KetdesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
