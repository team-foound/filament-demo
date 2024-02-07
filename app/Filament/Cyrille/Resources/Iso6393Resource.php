<?php

namespace App\Filament\Cyrille\Resources;

use App\Filament\Cyrille\Resources\Iso6393Resource\Pages;
use App\Filament\Cyrille\Resources\Iso6393Resource\RelationManagers;
use App\Models\Iso6393;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class Iso6393Resource extends Resource
{
    protected static ?string $model = Iso6393::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id3')
                    ->required()
                    ->maxLength(3),
                Forms\Components\Textarea::make('name')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('Part2B')
                    ->maxLength(3),
                Forms\Components\TextInput::make('Part2T')
                    ->maxLength(3),
                Forms\Components\TextInput::make('iso2')
                    ->maxLength(2),
                Forms\Components\TextInput::make('Scope')
                    ->required()
                    ->maxLength(1),
                Forms\Components\TextInput::make('Type')
                    ->required()
                    ->maxLength(1),
                Forms\Components\TextInput::make('value')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('Comment')
                    ->maxLength(150),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Toggle::make('written')
                    ->required(),
                Forms\Components\Toggle::make('spoken')
                    ->required(),
                Forms\Components\Toggle::make('enabled')
                    ->required(),
                Forms\Components\Toggle::make('trad_website')
                    ->required(),
                Forms\Components\Toggle::make('trad_client')
                    ->required(),
                Forms\Components\Toggle::make('trad_manager')
                    ->required(),
                Forms\Components\TextInput::make('website_status')
                    ->required()
                    ->maxLength(20)
                    ->default('unpublished'),
                Forms\Components\TextInput::make('manager_status')
                    ->required()
                    ->maxLength(20)
                    ->default('unpublished'),
                Forms\Components\TextInput::make('client_status')
                    ->required()
                    ->maxLength(20)
                    ->default('unpublished'),
                Forms\Components\TextInput::make('store_status')
                    ->required()
                    ->maxLength(20)
                    ->default('unpublished'),
                Forms\Components\TextInput::make('website_content_status')
                    ->required()
                    ->maxLength(20)
                    ->default('unpublished'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Part2B')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Part2T')
                    ->searchable(),
                Tables\Columns\TextColumn::make('iso2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Scope')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('value')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Comment')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('written')
                    ->boolean(),
                Tables\Columns\IconColumn::make('spoken')
                    ->boolean(),
                Tables\Columns\IconColumn::make('enabled')
                    ->boolean(),
                Tables\Columns\IconColumn::make('trad_website')
                    ->boolean(),
                Tables\Columns\IconColumn::make('trad_client')
                    ->boolean(),
                Tables\Columns\IconColumn::make('trad_manager')
                    ->boolean(),
                Tables\Columns\TextColumn::make('website_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('manager_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('store_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website_content_status')
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
            'index' => Pages\ListIso6393s::route('/'),
            'create' => Pages\CreateIso6393::route('/create'),
            'view' => Pages\ViewIso6393::route('/{record}'),
            'edit' => Pages\EditIso6393::route('/{record}/edit'),
        ];
    }
}
