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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KriteriaPenilaianResource extends Resource
{
    protected static ?string $model = KriteriaPenilaian::class;

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
                //
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
            'index' => Pages\ListKriteriaPenilaians::route('/'),
            'create' => Pages\CreateKriteriaPenilaian::route('/create'),
            'edit' => Pages\EditKriteriaPenilaian::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return Auth::user()?->hasRole('dosen');
    }
}
