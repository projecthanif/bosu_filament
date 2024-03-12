<?php

namespace App\Filament\Resources\AuthResource\Pages;

use App\Filament\Resources\AuthResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfile extends EditRecord
{
    protected static string $resource = AuthResource::class;
}
