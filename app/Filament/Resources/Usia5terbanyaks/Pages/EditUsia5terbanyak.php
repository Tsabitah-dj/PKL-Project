<?php

namespace App\Filament\Resources\Usia5terbanyaks\Pages;

use App\Filament\Resources\Usia5terbanyaks\Usia5terbanyakResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUsia5terbanyak extends EditRecord
{
    protected static string $resource = Usia5terbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
