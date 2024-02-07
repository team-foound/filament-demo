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
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
