<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ClientResource\RelationManagers\ProjectRelationManager;
use App\Models\Invoice;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $navigationLabel = 'Klien UMKM';
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama UMKM')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('business_type')
                    ->label('Jenis Bisnis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label('Alamat')
                    ->nullable()
                    ->maxLength(500),
                Forms\Components\TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->nullable(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->nullable()
                    ->email(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama UMKM'),
                TextColumn::make('business_type')->label('Jenis Bisnis'),
                TextColumn::make('address')->label('Alamat'),
                TextColumn::make('phone')->label('Telepon'),
                TextColumn::make('email')->label('Email'),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            ClientResource\RelationManagers\ProjectRelationManager::class,
            ClientResource\RelationManagers\InvoiceRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
