<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Resources\RelationManagers\RelationManager;

class ProjectRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';
    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Proyek')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->nullable(),
            Forms\Components\TextInput::make('budget')
                ->label('Anggaran')
                ->numeric()
                ->minValue(0)
                ->nullable(),
            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'in_progress' => 'In Progress',
                    'completed' => 'Completed',
                ])
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Nama Proyek')
                ->searchable(),
            Tables\Columns\TextColumn::make('invoice.invoice_number')
                ->label('No. Invoice'),
            Tables\Columns\TextColumn::make('status')
                ->label('Status'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat Pada')
                ->date(),
        ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }
}
