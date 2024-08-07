<?php

namespace App\Filament\Resources\OfficialsResource\Pages;

use App\Filament\Resources\OfficialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficials extends EditRecord
{
    protected static string $resource = OfficialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
