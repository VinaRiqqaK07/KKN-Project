<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficialsResource\Pages;
use App\Filament\Resources\OfficialsResource\RelationManagers;
use App\Models\Officials;
use App\Models\Positions;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfficialsResource extends Resource
{
    protected static ?string $model = Officials::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Aparat Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Section::make()->schema([
                    SpatieMediaLibraryFileUpload::make('official_image')
                        ->label('Foto Pejabat')
                        ->columnSpan(2),
                    TextInput::make('official_name')
                        ->label('Nama Pejabat')
                        ->autocapitalize()
                        ->required(),
                    Select::make('position_id')
                        ->relationship(name: 'positions', titleAttribute: 'position_name')
                        ->label('Jabatan')
                        ->options(Positions::all()->pluck('position_name', 'id'))
                        ->searchable()
                        ->required()
                        ->rules(['exists:positions,id'])
                        ->reactive()
                        ->afterStateUpdated(function (callable $get, callable $set, $state) {
                            $position = Positions::find($state);
                            if($position && $position->is_single_used){
                                $count = Officials::where('position_id', $position->id)->count();
                                if($count > 0){
                                    $set('position_id', null);
                                    Notification::make()
                                        ->title('Jabatan ini sudah diambil. Silakan menghapus atau mengedit jabatan sebelumnya.')
                                        ->danger()
                                        ->send();
                                }
                            }
                        }),
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
                SpatieMediaLibraryImageColumn::make('official_image')
                    ->label('Foto Pejabat')
                    ->square(),
                TextColumn::make('official_name')
                    ->label('Nama Pejabat'),
                TextColumn::make('positions.position_name')
                    ->label('Jabatan'),
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
            'index' => Pages\ListOfficials::route('/'),
            'create' => Pages\CreateOfficials::route('/create'),
            'edit' => Pages\EditOfficials::route('/{record}/edit'),
        ];
    }
}
