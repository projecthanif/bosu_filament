<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DueResource\Pages;
use App\Filament\Resources\DueResource\RelationManagers;
use App\Models\Due;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DueResource extends Resource
{
    protected static ?string $model = Due::class;

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
                TextColumn::make('due_name')
                    ->label('name'),
                TextColumn::make('amount')
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
            'index' => Pages\ListDues::route('/'),
            'create' => Pages\CreateDue::route('/create'),
            'edit' => Pages\EditDue::route('/{record}/edit'),
        ];
    }
}
