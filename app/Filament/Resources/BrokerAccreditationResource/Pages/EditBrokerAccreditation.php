<?php

namespace App\Filament\Resources\BrokerAccreditationResource\Pages;

use App\Filament\Resources\BrokerAccreditationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrokerAccreditation extends EditRecord
{
    protected static string $resource = BrokerAccreditationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
