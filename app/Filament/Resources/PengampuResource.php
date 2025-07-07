<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengampuResource\Pages;
use App\Filament\Resources\PengampuResource\RelationManagers;
use App\Models\Pengampu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PengampuResource extends Resource
{
    protected static ?string $model = Pengampu::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_dosen')
                    ->label('Dosen Pengampu')
                    ->relationship('dosen', 'nama')
                    ->required(),

                Forms\Components\Select::make('id_mk')
                    ->label('Mata Kuliah')
                    ->relationship('mataKuliah', 'nama_mk')
                    ->required(),

                Forms\Components\Select::make('id_semester')
                    ->label('Semester')
                    ->relationship('semester', 'nama_semester')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dosen.nama')->label('Dosen'),
                Tables\Columns\TextColumn::make('mataKuliah.nama_mk')->label('Mata Kuliah'),
                Tables\Columns\TextColumn::make('semester.nama_semester')->label('Semester'),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPengampus::route('/'),
            'create' => Pages\CreatePengampu::route('/create'),
            'edit' => Pages\EditPengampu::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Auth::check() && Auth::user()->hasRole('dosen');
    }
}
