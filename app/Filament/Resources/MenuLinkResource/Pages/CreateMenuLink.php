<?php

namespace App\Filament\Resources\MenuLinkResource\Pages;

use App\Filament\Resources\MenuLinkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMenuLink extends CreateRecord
{
    protected static string $resource = MenuLinkResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
