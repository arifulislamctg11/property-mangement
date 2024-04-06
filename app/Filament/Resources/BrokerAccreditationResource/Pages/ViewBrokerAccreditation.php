<?php

namespace App\Filament\Resources\BrokerAccreditationResource\Pages;

use App\Filament\Resources\BrokerAccreditationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBrokerAccreditation extends ViewRecord
{
    protected static string $resource = BrokerAccreditationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
