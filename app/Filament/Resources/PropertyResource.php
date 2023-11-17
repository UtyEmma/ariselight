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
                                ->columnSpanFull(),
                            Forms\Components\RichEditor::make('description')
                                ->maxLength(65535)
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('duration')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('type')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('price')
                                ->maxLength(255),
                        ]),

                Section::make('Property Information')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('address')
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('state')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('city')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('landmark')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('no_bedrooms')
                            ->maxLength(255)
                            ->numeric(),
                        Forms\Components\TextInput::make('no_bathrooms')
                            ->maxLength(255)
                            ->numeric(),
                        Forms\Components\TextInput::make('no_floors')
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
                            ->label('Availability Status')
                            ->native(false),
                        Forms\Components\Toggle::make('sold')
                            ->label("Mark as sold")
                            ->inline(false)
                            ->required(),
                ]),

                // Forms\Components\Textarea::make('extra_info')
                //     ->maxLength(65535)
                //     ->columnSpanFull(),
                // Forms\Components\TextInput::make('valid_till')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agency_fee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('initial_fees')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_bedrooms')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_bathrooms')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_floors')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('landmark')
                    ->searchable(),
                Tables\Columns\TextColumn::make('valid_till')
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
