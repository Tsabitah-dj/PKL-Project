<?php

namespace App\Filament\Resources\Pasawahans\Pages;

use App\Filament\Resources\Pasawahans\PasawahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPasawahan extends EditRecord
{
    protected static string $resource = PasawahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
