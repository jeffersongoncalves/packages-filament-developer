<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Filament\QrCodeField\Forms\Components\QrCodeInput;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                QrCodeInput::make('barcode')
                    ->required(),
            ]);
    }
}
