<?php

namespace App\Filament\Cyrille\Resources\Iso6393Resource\Pages;

use App\Filament\Cyrille\Resources\Iso6393Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIso6393s extends ListRecords
{
    protected static string $resource = Iso6393Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
