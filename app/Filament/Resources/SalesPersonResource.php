<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesPersonResource\Pages;
use App\Filament\Resources\SalesPersonResource\RelationManagers;
use App\Models\SalesPerson;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalesPersonResource extends Resource
{
    protected static ?string $model = SalesPerson::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middle_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_address')
                    ->maxLength(255)
                    ->default(null),
                Select::make('gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                        'Other' => 'Other',
                    ])
                    ->required(),
                Select::make('civil_status')
                    ->options([
                        'Single' => 'Single',
                        'Married' => 'Married',
                        'other' => 'other',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('citizenship')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('mobile_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birthdate'),
                Forms\Components\TextInput::make('email_address')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('facebook_account')
                    ->maxLength(255)
                    ->default(null),
                Select::make('highest_education')
                    ->options([
                        'High School Grad' => 'High School Grad',
                        'College Grad' => 'College Grad',
                        'Other' => 'Other',
                    ])
                    ->default(null),
                Forms\Components\TextInput::make('tin_number')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('unit_sales_manager')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('realty_name')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civil_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('citizenship')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('highest_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tin_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('unit_sales_manager')
                    ->searchable(),
                Tables\Columns\TextColumn::make('realty_name')
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
            'index' => Pages\ListSalesPeople::route('/'),
            'create' => Pages\CreateSalesPerson::route('/create'),
            'view' => Pages\ViewSalesPerson::route('/{record}'),
            'edit' => Pages\EditSalesPerson::route('/{record}/edit'),
        ];
    }
}
