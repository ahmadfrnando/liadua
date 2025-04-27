<?php

namespace App\Filament\Resources\ObatKeluarResource\Pages;

use App\Filament\Resources\ObatKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObatKeluar extends EditRecord
{
    protected static string $resource = ObatKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
