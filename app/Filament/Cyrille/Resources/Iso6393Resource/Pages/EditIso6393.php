<?php

namespace App\Filament\Cyrille\Resources\Iso6393Resource\Pages;

use App\Filament\Cyrille\Resources\Iso6393Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIso6393 extends EditRecord
{
    protected static string $resource = Iso6393Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
