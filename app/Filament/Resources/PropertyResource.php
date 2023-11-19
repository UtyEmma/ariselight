<?php

namespace App\Filament\Resources;

use App\Enums\Status;
use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Basic Information")
                        ->columns(3)
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->maxLength(255)
                                ->placeholder("Property Name")
                                ->label('Property Name')
                                ->columnSpanFull(),
                            Forms\Components\RichEditor::make('description')
                                ->maxLength(65535)
                                ->placeholder("Property Description")
                                ->label('Property Description')
                                ->columnSpanFull(),
                            Forms\Components\Select::make('type')
                                ->options([
                                    'For Sale' => "For Sale",
                                    'For Rent' => "For Rent"
                                ])
                                ->label('Property Type')
                                ->native(false),
                            Forms\Components\Select::make('duration')
                                ->options([
                                    'monthly' => "Monthly",
                                    'yearly' => "Yearly"
                                ])
                                ->label('Tenancy Duration')
                                ->native(false),
                            Forms\Components\TextInput::make('price')
                                ->numeric()
                                ->label("Price (N)")
                                ->placeholder('Price')
                                ->maxLength(255),
                        ]),

                Section::make('Property Information')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('address')
                            ->placeholder('Address')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('city')
                            ->placeholder('City')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('state')
                            ->placeholder('State')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('no_bedrooms')
                            ->numeric()
                            ->placeholder('No. of Bedrooms')
                            ->maxLength(255)
                            ->numeric(),
                        Forms\Components\TextInput::make('no_bathrooms')
                            ->numeric()
                            ->placeholder('No. of Bathrooms')
                            ->maxLength(255)
                            ->numeric(),
                        Forms\Components\TextInput::make('no_floors')
                            ->placeholder('No. of Floors')
                            ->numeric()
                            ->maxLength(255),
                ]),

                Section::make('Media')
                ->columns(3)
                ->schema([
                    Forms\Components\FileUpload::make('image')->label('Main Image'),
                    Forms\Components\FileUpload::make('images')
                        ->multiple()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('video')
                        ->placeholder("Video link ")
                        ->maxLength(255)
                        ->columnSpanFull(),
                ]),

                Section::make("More Information")
                    ->columns(3)
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->options([
                                Status::ACTIVE->value => Status::ACTIVE->value,
                                Status::INACTIVE->value => Status::INACTIVE->value
                            ])
                            ->searchable()
                            ->label('Availability Status')
                            ->native(false),
                        Forms\Components\Toggle::make('sold')
                            ->label("Mark as sold")
                            ->inline(false)
                            ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('reviews')
                    ->searchable(),
                Tables\Columns\IconColumn::make('sold')
                    ->boolean(),
                Tables\Columns\TextColumn::make('views')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'view' => Pages\ViewProperty::route('/{record}'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
