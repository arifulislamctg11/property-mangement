<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrokerResource\Pages;
use App\Filament\Resources\BrokerResource\RelationManagers;
use App\Models\Broker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrokerResource extends Resource
{
    protected static ?string $model = Broker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('realty_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lead_broker')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('office_address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('telephone_number')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('mobile_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email_address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('years_in_operation')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('real_estate_license_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('valid_from'),
                Forms\Components\DatePicker::make('valid_until'),
                Forms\Components\TextInput::make('place_issued')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('authorized_representative')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('designation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('tin_number')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('admin')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('realty_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lead_broker')
                    ->searchable(),
                Tables\Columns\TextColumn::make('office_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telephone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('years_in_operation')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('real_estate_license_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('valid_from')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('valid_until')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('place_issued')
                    ->searchable(),
                Tables\Columns\TextColumn::make('authorized_representative')
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tin_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('admin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListBrokers::route('/'),
            'create' => Pages\CreateBroker::route('/create'),
            'view' => Pages\ViewBroker::route('/{record}'),
            'edit' => Pages\EditBroker::route('/{record}/edit'),
        ];
    }
}
