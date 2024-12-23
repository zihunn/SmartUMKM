<?php

namespace App\Filament\Resources\InternalUserResource\Pages;

use App\Filament\Resources\InternalUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInternalUser extends CreateRecord
{
    protected static string $resource = InternalUserResource::class;
}
