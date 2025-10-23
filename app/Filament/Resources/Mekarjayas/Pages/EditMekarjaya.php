<?php

namespace App\Filament\Resources\Mekarjayas\Pages;

use App\Filament\Resources\Mekarjayas\MekarjayaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMekarjaya extends EditRecord
{
    protected static string $resource = MekarjayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
