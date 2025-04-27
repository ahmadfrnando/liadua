<?php

namespace App\Filament\Resources\ObatKeluarResource\Pages;

use App\Filament\Resources\ObatKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObatKeluars extends ListRecords
{
    protected static string $resource = ObatKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
