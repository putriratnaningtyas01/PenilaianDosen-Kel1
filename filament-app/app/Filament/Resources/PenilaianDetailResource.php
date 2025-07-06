<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenilaianDetailResource\Pages;
use App\Models\PenilaianDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;

class PenilaianDetailResource extends Resource
{
    protected static ?string $model = PenilaianDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Detail Penilaian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_kriteria')
                    ->label('Kriteria')
                    ->relationship('kriteria', 'nama_kriteria')
                    ->required(),
                Select::make('id_penilaian')
                    ->label('Komentar')
                    ->relationship('penilaian', 'komentar')
                    ->required(),
                    
                Select::make('nilai')
                    ->label('Nilai')
                    ->options([
                        1 => '1 - Sangat Buruk',
                        2 => '2 - Buruk',
                        3 => '3 - Cukup',
                        4 => '4 - Baik',
                        5 => '5 - Sangat Baik',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kriteria.nama_kriteria')
                    ->label('Kriteria'),

                TextColumn::make('penilaian.komentar')
                    ->label('Komentar'),

                TextColumn::make('nilai')
                    ->label('Nilai'),
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

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenilaianDetails::route('/'),
            'create' => Pages\CreatePenilaianDetail::route('/create'),
            'edit' => Pages\EditPenilaianDetail::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }

    public static function canAccess(): bool
    {
        return Auth::user()?->hasAnyRole(['mahasiswa', 'dosen']);
    }

    public static function canEdit($record): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }
}


