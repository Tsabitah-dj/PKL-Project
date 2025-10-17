<?php

namespace App\Filament\Resources\Skms\Pages;

use App\Filament\Resources\Skms\SkmResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSkm extends ViewRecord
{
    protected static string $resource = SkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
