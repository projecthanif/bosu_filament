<?php

namespace App\Filament\User\Resources\DueResource\Pages;

use App\Filament\User\Resources\DueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDue extends EditRecord
{
    protected static string $resource = DueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
