<?php

namespace App\Filament\Cyrille\Resources\Iso6393Resource\Pages;

use App\Filament\Cyrille\Resources\Iso6393Resource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIso6393 extends ViewRecord
{
    protected static string $resource = Iso6393Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
