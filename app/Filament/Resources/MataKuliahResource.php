<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MataKuliahResource\Pages;
use App\Filament\Resources\MataKuliahResource\RelationManagers;
use App\Models\MataKuliah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class MataKuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_mk')
                ->label('Kode Mata Kuliah')
                ->required()
                ->maxLength(20),

            Forms\Components\TextInput::make('nama_mk')
                ->label('Nama Mata Kuliah')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('sks')
                ->label('SKS')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('semester')
                ->label('Semester')
                ->maxLength(10),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_mk')
                ->label('Kode')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('nama_mk')
                ->label('Nama Mata Kuliah')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('sks')
                ->label('SKS')
                ->sortable(),

            Tables\Columns\TextColumn::make('semester')
                ->label('Semester')
                ->sortable(),

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
            'index' => Pages\ListMataKuliahs::route('/'),
            'create' => Pages\CreateMataKuliah::route('/create'),
            'edit' => Pages\EditMataKuliah::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Auth::user()?->hasRole('mahasiswa');
    }
}
