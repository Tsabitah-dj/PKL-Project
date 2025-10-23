<?php

namespace App\Filament\Resources\Tanjungkamunings\Pages;

use App\Filament\Resources\Tanjungkamunings\TanjungkamuningResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTanjungkamuning extends EditRecord
{
    protected static string $resource = TanjungkamuningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
