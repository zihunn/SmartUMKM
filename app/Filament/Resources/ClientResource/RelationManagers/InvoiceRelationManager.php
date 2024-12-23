<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceRelationManager extends RelationManager
{
    protected static string $relationship = 'invoice';
    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('invoice_number')
                    ->label('Nomor Invoice')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('amount')
                    ->label('Jumlah')
                    ->required()
                    ->numeric()
                    ->minValue(0),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'unpaid' => 'Belum Dibayar',
                        'paid' => 'Sudah Dibayar',
                        'overdue' => 'Terlambat',
                    ])
                    ->default('unpaid')
                    ->required(),

                Forms\Components\Select::make('client_id')
                    ->label('Client')
                    ->relationship('client', 'name')
                    ->required()
                    ->searchable()
                    ->placeholder('Pilih Client')
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('project_id', null);
                    }),

                Forms\Components\Select::make('project_id')
                    ->label('Proyek')
                    ->relationship('project', 'name')
                    ->required()
                    ->placeholder('Pilih Project (silahkan pilih client terlebih dahulu)')
                    ->options(function ($get) {
                        $clientId = $get('client_id');

                        if ($clientId) {
                            $projects = \App\Models\Project::where('client_id', $clientId)
                                ->pluck('name', 'id');

                            if ($projects->isEmpty()) {
                                return [
                                    '' => 'Belum ada project',
                                ];
                            }

                            return $projects;
                        }

                        return [
                            '' => 'Pilih client terlebih dahulu',
                        ];
                    })
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('invoice_number')
                    ->label('No. Invoice')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Total'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
