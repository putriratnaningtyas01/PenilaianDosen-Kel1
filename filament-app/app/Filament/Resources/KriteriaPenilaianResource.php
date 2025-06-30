<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KriteriaPenilaianResource\Pages;
use App\Filament\Resources\KriteriaPenilaianResource\RelationManagers;
use App\Models\KriteriaPenilaian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class KriteriaPenilaianResource extends Resource
{
    protected static ?string $model = KriteriaPenilaian::class;

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('nama_kriteria')
                        ->label('Nama Kriteria')
                        ->required()
                        ->maxLength(100),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->label('ID'),

                Tables\Columns\TextColumn::make('nama_kriteria')
                    ->label('Nama Kriteria')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                    ->label('Lihat'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKriteriaPenilaians::route('/'),
            'create' => Pages\CreateKriteriaPenilaian::route('/create'),
            'edit' => Pages\EditKriteriaPenilaian::route('/{record}/edit'),
            'view' => Pages\ViewKriteriaPenilaian::route('/{record}'),
        ];
    }

    public static function canAccess(): bool
    {
        return Auth::user()?->hasRole('dosen');
    }
}
