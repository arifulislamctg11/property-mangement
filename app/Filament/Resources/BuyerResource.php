<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BuyerResource\Pages;
use App\Filament\Resources\BuyerResource\RelationManagers;
use App\Models\Buyer;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;


class BuyerResource extends Resource
{
    protected static ?string $model = Buyer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('PERSONAL INFORMATION')
                    ->schema([
                        Forms\Components\TextInput::make('last_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('middle_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('residence_address')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('years_of_residency')
                            ->required()
                            ->numeric(),
                        Select::make('type_of_house')
                            ->options([
                                'Owned' => 'Owned',
                                'Rend/board' => 'Rend/board',
                            ])->required(),
                        Select::make('civil_status')
                            ->options([
                                'Single' => 'Single',
                                'Married' => 'Married',
                                'other' => 'other',
                            ])
                            ->required(),
                        Forms\Components\DatePicker::make('birthday')
                            ->required(),
                        Select::make('sex')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('citizenship')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('religion')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('tin')
                            ->maxLength(255)
                            ->default(null),
                        Select::make('highest_education')
                            ->options([
                                'High School Grad' => 'High School Grad',
                                'College Grad' => 'College Grad',
                                'Other' => 'Other',
                            ]),
                        Forms\Components\TextInput::make('telephone_number')
                            ->tel()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('mobile_number')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('number_of_dependents')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('email_address')
                            ->email()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('facebook_account')
                            ->maxLength(255)
                            ->default(null),

                    ])->columns(2),
                Section::make('Co-Owner\'s Information')
                    ->schema([
                        Forms\Components\TextInput::make('co_owner_first_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_middle_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_last_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_residence_address')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_years_of_residency')
                            ->numeric()
                            ->default(null),
                        Forms\Components\DatePicker::make('co_owner_birthday'),
                        Select::make('co_owner_sex')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other',
                            ])
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_citizenship')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_religion')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_tin')
                            ->maxLength(255)
                            ->default(null),
                        Select::make('co_owner_highest_education')->options([
                            'High School Grad' => 'High School Grad',
                            'College Grad' => 'College Grad',
                            'Other' => 'Other',
                        ])
                            ->default(null),
                        Select::make('co_owner_civil_status')
                            ->options([
                                'Single' => 'Single',
                                'Married' => 'Married',
                                'other' => 'other',
                            ])
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_email_address')
                            ->email()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_telephone_number')
                            ->tel()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('co_owner_mobile_number')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('relationship_with_buyer')
                            ->maxLength(255)
                            ->default(null),
                    ])->columns(2),
                Section::make('Attorney-In-Fact Information')
                    ->schema([
                        Forms\Components\TextInput::make('attorney_last_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_first_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_middle_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_residence_address')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_years_of_residency')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_citizenship')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\DatePicker::make('attorney_birthday'),
                        Select::make('attorney_sex')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other',
                            ])
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_religion')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_tin')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_email_address')
                            ->email()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_telephone_number')
                            ->tel()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_mobile_number')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_facebook_account')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('attorney_relationship_with_buyer')
                            ->maxLength(255)
                            ->default(null),
                    ])->columns(2),
                Section::make('Employment Information')
                    ->schema([
                        Select::make('employment_status')
                            ->options([
                                'Self-Employed' => 'Self-Employed',
                                'Government Employee' => 'Government Employee',
                                'Employed Private Company' => 'Employed Private Company',
                                'OFW' => 'OFW',
                                'Other' => 'Other',
                            ])
                            ->default(null),
                        Forms\Components\TextInput::make('business_name')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('business_location')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('industry')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\DatePicker::make('date_employed_established'),
                        Forms\Components\TextInput::make('employment_position')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('annual_income')
                            ->numeric()
                            ->default(null),
                        Forms\Components\TextInput::make('office_business_phone_number')
                            ->tel()
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('website')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('employment_email_address')
                            ->email()
                            ->maxLength(255)
                            ->default(null),
                    ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('residence_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('years_of_residency')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type_of_house')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civil_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('citizenship')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('highest_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telephone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number_of_dependents')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_residence_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_years_of_residency')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('co_owner_birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('co_owner_sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_citizenship')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_tin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_highest_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_civil_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_telephone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('co_owner_mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('relationship_with_buyer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_middle_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_residence_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_years_of_residency')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attorney_citizenship')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('attorney_sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_religion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_tin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_email_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_telephone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_mobile_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_facebook_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attorney_relationship_with_buyer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employment_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('business_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('industry')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_employed_established')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('employment_position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_income')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('office_business_phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employment_email_address')
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
            'index' => Pages\ListBuyers::route('/'),
            'create' => Pages\CreateBuyer::route('/create'),
            'view' => Pages\ViewBuyer::route('/{record}'),
            'edit' => Pages\EditBuyer::route('/{record}/edit'),
        ];
    }
}
