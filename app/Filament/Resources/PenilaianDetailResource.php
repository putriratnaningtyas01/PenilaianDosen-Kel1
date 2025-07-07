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
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class PenilaianDetailResource extends Resource
{
    protected static ?string $model = PenilaianDetail::class;

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document-list';
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
                        'Sangat Buruk' => '1 - Sangat Buruk',
                        'Buruk' => '2 - Buruk',
                        'Cukup' => '3 - Cukup',
                        'Baik' => '4 - Baik',
                        'Sangat Baik' => '5 - Sangat Baik',
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

                Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime()
                ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                ->label('Diperbarui')
                ->dateTime()
                ->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->successNotification(fn () => Notification::make()
                        ->title('Mahasiswa berhasil dihapus')
                        ->body('Satu mahasiswa telah berhasil dihapus!')
                        ->success()),
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

    public static function canAccess(): bool
    {
        return Auth::user()?->hasAnyRole(['mahasiswa', 'dosen']);
    }

    public static function canViewAny(): bool
    {
        return in_array(auth()->user()?->role, ['mahasiswa', 'dosen']);
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->role === 'mahasiswa';
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()?->role === 'mahasiswa';
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->role === 'mahasiswa';
    }
}

