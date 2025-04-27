<?php

namespace App\Filament\Resources\ObatMasukResource\Pages;

use App\Filament\Resources\ObatMasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObatMasuk extends EditRecord
{
    protected static string $resource = ObatMasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
