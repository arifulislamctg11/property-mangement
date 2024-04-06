<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrokerAccreditationResource\Pages;
use App\Filament\Resources\BrokerAccreditationResource\RelationManagers;
use App\Models\BrokerAccreditation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrokerAccreditationResource extends Resource
{
    protected static ?string $model = BrokerAccreditation::class;

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
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telephone_no')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('mobile_no')
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
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('real_estate_license_no')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('valid_from')
                    ->required(),
                Forms\Components\DatePicker::make('valid_until')
                    ->required(),
                Forms\Components\TextInput::make('place_issued')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('authorized_representative')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tin_no')
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
                Tables\Columns\TextColumn::make('telephone_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('years_in_operation')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('real_estate_license_no')
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
                Tables\Columns\TextColumn::make('tin_no')
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
            'index' => Pages\ListBrokerAccreditations::route('/'),
            'create' => Pages\CreateBrokerAccreditation::route('/create'),
            'view' => Pages\ViewBrokerAccreditation::route('/{record}'),
            'edit' => Pages\EditBrokerAccreditation::route('/{record}/edit'),
        ];
    }
}
