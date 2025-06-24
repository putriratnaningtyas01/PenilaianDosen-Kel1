<?php

namespace App\Filament\Resources\PenilaianDetailResource\Pages;

use App\Filament\Resources\PenilaianDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenilaianDetail extends EditRecord
{
    protected static string $resource = PenilaianDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
