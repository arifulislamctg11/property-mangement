<?php

namespace App\Filament\Resources\BrokerAccreditationResource\Pages;

use App\Filament\Resources\BrokerAccreditationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrokerAccreditations extends ListRecords
{
    protected static string $resource = BrokerAccreditationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
