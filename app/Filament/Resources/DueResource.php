<?php

namespace App\Filament\Resources;

use App\Models\Due;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Summarizers\Sum;
use App\Filament\Resources\DueResource\Pages;
use Filament\Forms\Components\MarkdownEditor;

class DueResource extends Resource
{
    protected static ?string $model = Due::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('due_name')
                    ->name('Due Name'),
                TextInput::make('amount')
                    ->name('Due Amount'),
                MarkdownEditor::make('description')
                    ->name('Description')->columnSpanFull()
            ]);
    }

    public static function canAccess(): bool
    {
        return auth()->user()->is_admin ===  'true';
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('due_name')
                    ->label('name'),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
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
            'create' => Pages\CreateDue::route('/create'),
            'edit' => Pages\EditDue::route('/{record}/edit'),
        ];
    }
}
