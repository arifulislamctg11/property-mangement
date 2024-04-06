<?php

namespace App\Filament\Resources\BrokerResource\Pages;

use App\Filament\Resources\BrokerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBroker extends ViewRecord
{
    protected static string $resource = BrokerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
