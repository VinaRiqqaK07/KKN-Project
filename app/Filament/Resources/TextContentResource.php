<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextContentResource\Pages;
use App\Filament\Resources\TextContentResource\RelationManagers;
use App\Models\TextContent;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TextContentResource extends Resource
{
    protected static ?string $model = TextContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Section::make()->schema([
                    Select::make('type')
                        ->label('Tipe Konten')
                        ->options([
                            'visi-misi' => 'Visi-Misi',
                            'sejarah' => 'Sejarah'
                        ])
                        ->required(),
                    RichEditor::make('content')
                        ->label('Isi Konten')
                        ->disableToolbarButtons([
                            'attachFiles',
                            'blockquote',
                            'codeBlock',
                            'undo',
                            'redo'
                        ])
                        ->columnSpan(2)
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('No.')->state(
                    static function (HasTable $livewire, $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('type')
                    ->label('Tipe Konten')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'visi-misi' => 'success',
                        'sejarah' => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->sortable(),
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
            'index' => Pages\ListTextContents::route('/'),
            'create' => Pages\CreateTextContent::route('/create'),
            'edit' => Pages\EditTextContent::route('/{record}/edit'),
        ];
    }
}
