<?php

namespace App\Filament\Resources\PeriodePenilaianResource\Pages;

use App\Filament\Resources\PeriodePenilaianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeriodePenilaians extends ListRecords
{
    protected static string $resource = PeriodePenilaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
