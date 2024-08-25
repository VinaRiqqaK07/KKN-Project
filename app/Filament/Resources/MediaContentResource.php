<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaContentResource\Pages;
use App\Filament\Resources\MediaContentResource\RelationManagers;
use App\Models\MediaContent;
use App\Rules\UniqueStructure;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MediaContentResource extends Resource
{
    protected static ?string $model = MediaContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Section::make()->schema([
                    SpatieMediaLibraryFileUpload::make('image')
                        ->label('Upload Gambar')
                        ->columnSpan(2)
                        ->required(),
                    Select::make('type')
                        ->label('Tipe Gambar')
                        ->options([
                            'banner' => 'Banner',
                            'struktur' => 'Struktur Organisasi',
                            'logo' => 'Logo Website',
                        ])
                        ->columnSpan(2)    
                        ->required(),
                    TextInput::make('title')
                        ->label('Nama'),
                ])
            ])
            ->columns(2);
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
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Gambar')
                    ->square(),
                TextColumn::make('type')
                    ->label('Tipe Konten')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'banner' => 'success',
                        'struktur' => 'warning',
                        'logo' => 'info',
                    })
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

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $mediaContent = new MediaContent($data);
        $mediaContent->save();
        if ($data['type'] === 'banner') {
            $bannerCount = MediaContent::where('type', 'banner')->count();
            if ($bannerCount >= 3) {
                throw new \Exception('Maksimal 3 banner yang diperbolehkan.');
            }
        }
        

        return $data;
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
            'index' => Pages\ListMediaContents::route('/'),
            'create' => Pages\CreateMediaContent::route('/create'),
            'edit' => Pages\EditMediaContent::route('/{record}/edit'),
        ];
    }
}
