<?php

namespace App\Filament\Resources\SalesReceiptResource\Pages;

use App\Filament\Resources\SalesReceiptResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSalesReceipt extends ViewRecord
{
    protected static string $resource = SalesReceiptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
