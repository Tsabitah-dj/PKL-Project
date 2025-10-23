<?php

namespace App\Filament\Resources\Sinarjayas\Pages;

use App\Filament\Resources\Sinarjayas\SinarjayaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSinarjaya extends EditRecord
{
    protected static string $resource = SinarjayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
