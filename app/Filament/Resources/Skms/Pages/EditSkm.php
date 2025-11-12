<?php

namespace App\Filament\Resources\Skms\Pages;

use App\Filament\Resources\Skms\SkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSkm extends EditRecord
{
    protected static string $resource = SkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
