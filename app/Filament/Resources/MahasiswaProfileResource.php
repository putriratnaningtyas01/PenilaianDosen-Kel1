<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaProfileResource\Pages;
use App\Models\MahasiswaProfile;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Auth;

class MahasiswaProfileResource extends Resource
{
    protected static ?string $model = MahasiswaProfile::class;

    protected static ?string $navigationIcon = 'heroicon-s-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nama')
                    ->label('Nama Mahasiswa')
                    ->required()
                    ->maxLength(20),

                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->maxLength(20),

                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-Laki' => 'Laki-Laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('prodi')
                    ->label('Program Studi')
                    ->required(),

                Forms\Components\TextInput::make('angkatan')
                    ->label('Angkatan')
                    ->required()
                    ->numeric()
                    ->minValue(2000)
                    ->maxValue(date('Y')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Mahasiswa')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->searchable(),

                Tables\Columns\TextColumn::make('prodi')
                    ->label('Prodi'),

                Tables\Columns\TextColumn::make('angkatan')
                    ->label('Angkatan'),

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
                SelectFilter::make('jenis_kelamin')
                    ->options([
                        'Laki-Laki' => 'Laki-Laki',
                        'Perempuan' => 'Perempuan',
                    ]),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMahasiswaProfiles::route('/'),
            'create' => Pages\CreateMahasiswaProfile::route('/create'),
            'edit' => Pages\EditMahasiswaProfile::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }

    public static function canEdit($record): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }

    public static function canDelete($record): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }

    public static function canView($record): bool
    {
        return Auth::user()?->hasAnyRole(['mahasiswa', 'dosen']);
    }

    public static function canAccess(): bool
    {
        return Auth::user()?->hasAnyRole(['mahasiswa', 'dosen']);
    }
}
