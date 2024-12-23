<?php

namespace App\Filament\Resources\InternalUserResource\Pages;

use App\Filament\Resources\InternalUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternalUsers extends ListRecords
{
    protected static string $resource = InternalUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
