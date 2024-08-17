<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PositionsResource\Pages;
use App\Filament\Resources\PositionsResource\RelationManagers;
use App\Models\Positions;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PositionsResource extends Resource
{
    protected static ?string $model = Positions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Aparat Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Section::make()->schema([
                    TextInput::make('position_name')
                        ->label('Nama Jabatan')
                        ->required(),
                    Toggle::make('is_single_used')
                        ->label('Jabatan Eksklusif')
                        ->onColor('success'),
                ])
            ])->columns(2);;
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
                )->sortable(),
                TextColumn::make('position_name')
                    ->label('Nama Jabatan'),
                ToggleColumn::make('is_single_used')
                    ->label('Jabatan Eksklusif'),
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
            'index' => Pages\ListPositions::route('/'),
            'create' => Pages\CreatePositions::route('/create'),
            'edit' => Pages\EditPositions::route('/{record}/edit'),
        ];
    }
}
