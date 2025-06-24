<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaProfileResource\Pages;
use App\Filament\Resources\MahasiswaProfileResource\RelationManagers;
use App\Models\MahasiswaProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class MahasiswaProfileResource extends Resource
{
    protected static ?string $model = MahasiswaProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('nim')->searchable(),
                TextColumn::make('jurusan')->searchable(),
                TextColumn::make('jenis_kelamin')->searchable(),
                TextColumn::make('agama')->searchable(),
                TextColumn::make('status')->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
}
