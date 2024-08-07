<?php

namespace App\Filament\Resources\NoticesResource\Pages;

use App\Filament\Resources\NoticesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNotices extends ListRecords
{
    protected static string $resource = NoticesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
