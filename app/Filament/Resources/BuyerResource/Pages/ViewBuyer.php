<?php

namespace App\Filament\Resources\BuyerResource\Pages;

use App\Filament\Resources\BuyerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBuyer extends ViewRecord
{
    protected static string $resource = BuyerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
