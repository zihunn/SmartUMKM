<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternalUserResource\Pages;
use App\Filament\Resources\InternalUserResource\RelationManagers;
use App\Models\InternalUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InternalUserResource extends Resource
{
    protected static ?string $model = InternalUser::class;
    protected static ?string $navigationLabel = 'Pengguna Internal';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Manajemen Pengguna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Nama Pengguna')
                ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                ->label('Email')
                ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                ->label('Peran')
                ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                ->label('Nomor Telepon')
                ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Pengguna'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('role')->label('Peran'),
                TextColumn::make('phone')->label('Telepon'),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
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
            'index' => Pages\ListInternalUsers::route('/'),
            'create' => Pages\CreateInternalUser::route('/create'),
            'edit' => Pages\EditInternalUser::route('/{record}/edit'),
        ];
    }
}
