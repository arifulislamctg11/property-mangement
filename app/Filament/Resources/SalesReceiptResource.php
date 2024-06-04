<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesReceiptResource\Pages;
use App\Filament\Resources\SalesReceiptResource\RelationManagers;
use App\Models\SalesReceipt;
use App\Models\Buyer;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;



class SalesReceiptResource extends Resource
{
    protected static ?string $model = SalesReceipt::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project_name')
                    ->default('IndPhil Homes'),
                Select::make('property_id')
                    ->label('lot_no')
                    ->options(Property::all()->pluck('lot_no', 'id'))
                    ->searchable()
                    ->default(null),
                Select::make('buyer_id')
                    ->label('buyer')
                    ->options(Buyer::all()->pluck('first_name', 'id'))
                    ->searchable()
                    ->default(null),
                // Forms\Components\TextInput::make('address')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->maxLength(255),
                Select::make('type')
                    ->options([
                        'partial' => 'Partial',
                        'full payment' => 'Full Payment',
                    ])
                    ->required(),
                DatePicker::make('month')
            ]);
    }

    // 'project_name',
    // 'lot_no.',
    // 'block_no.',
    // 'lot_area',
    // 'floor_area',
    // 'buyer',
    // 'address',
    // 'amount',
    // 'type',
    // 'month',

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('property.property_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('buyer.first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('month')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSalesReceipts::route('/'),
            'create' => Pages\CreateSalesReceipt::route('/create'),
            'view' => Pages\ViewSalesReceipt::route('/{record}'),
            'edit' => Pages\EditSalesReceipt::route('/{record}/edit'),
        ];
    }
}
