<?php

namespace App\Filament\Resources\Berdasarkanagamas\Pages;

use App\Filament\Resources\Berdasarkanagamas\BerdasarkanagamaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBerdasarkanagama extends EditRecord
{
    protected static string $resource = BerdasarkanagamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
