<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;
    protected static ?string $navigationLabel = 'Invoice';
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'Keuangan';

    public static function form(Form $form): Form
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



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice_number')->label('Nomor Invoice'),
                TextColumn::make('amount')->label('Jumlah'),
                TextColumn::make('status')->label('Status'),
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
