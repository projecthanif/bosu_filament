<?php

namespace App\Filament\User\Resources\DueResource\Pages;

use App\Filament\User\Resources\DueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDue extends CreateRecord
{
    protected static string $resource = DueResource::class;
}
