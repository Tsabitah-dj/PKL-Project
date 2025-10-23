<?php

namespace App\Filament\Resources\Jatis\Pages;

use App\Filament\Resources\Jatis\JatiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJati extends EditRecord
{
    protected static string $resource = JatiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
