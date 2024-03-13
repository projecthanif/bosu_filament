<?php

namespace App\Filament\User\Resources;

use App\Models\Due;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\Summarizers\Sum;
use App\Filament\User\Resources\DueResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\User\Resources\DueResource\RelationManagers;

class DueResource extends Resource
{
    protected static ?string $model = Due::class;



    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    // public static function getEloquentQuery(): Builder
    // {
    //     return parent::getEloquentQuery()->where('id', auth()->user()->id);
    // }

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
                    ->label('Due Name'),
                TextColumn::make('amount')
                    ->summarize([
                        Sum::make()
                            ->money('NGN')
                    ])
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ])
            ->paginated(false);
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
            // 'create' => Pages\CreateDue::route('/create'),
            'edit' => Pages\EditDue::route('/{record}/edit'),
        ];
    }
}
