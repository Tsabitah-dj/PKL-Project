<?php

namespace App\Filament\Resources\Mekarwangis\Pages;

use App\Filament\Resources\Mekarwangis\MekarwangiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMekarwangi extends EditRecord
{
    protected static string $resource = MekarwangiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
