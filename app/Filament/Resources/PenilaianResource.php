<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenilaianResource\Pages;
use App\Filament\Resources\PenilaianResource\RelationManagers;
use App\Models\Penilaian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PenilaianResource extends Resource
{
    protected static ?string $model = Penilaian::class;

    protected static ?string $navigationIcon = 'heroicon-s-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_mahasiswa')
                    ->label('Mahasiswa')
                    ->relationship('mahasiswa', 'nama')
                    ->required(),

                Forms\Components\Select::make('id_dosen')
                    ->label('Dosen')
                    ->relationship('dosen', 'nama') // ganti jika ingin tampilkan nama dosen/mk
                    ->required(),

                Forms\Components\Select::make('id_periode')
                    ->label('Periode Penilaian')
                    ->relationship('periode', 'nama_periode')
                    ->required(),

                Forms\Components\Textarea::make('komentar')
                    ->label('Komentar')
                    ->maxLength(1000)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mahasiswa.nama')
                    ->label('Mahasiswa'),

                Tables\Columns\TextColumn::make('dosen.nama')
                    ->label('Dosen'),

                Tables\Columns\TextColumn::make('periode.nama_periode')
                    ->label('Periode'),

                Tables\Columns\TextColumn::make('komentar')
                    ->limit(30)
                    ->label('Komentar'),

                Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime()
                ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                ->label('Diperbarui')
                ->dateTime()
                ->sortable(),
            ])
            ->filters([
                //
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenilaians::route('/'),
            'create' => Pages\CreatePenilaian::route('/create'),
            'edit' => Pages\EditPenilaian::route('/{record}/edit'),
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
