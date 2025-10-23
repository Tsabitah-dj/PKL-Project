<?php

namespace App\Filament\Resources\Langensaris\Pages;

use App\Filament\Resources\Langensaris\LangensariResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLangensari extends EditRecord
{
    protected static string $resource = LangensariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
