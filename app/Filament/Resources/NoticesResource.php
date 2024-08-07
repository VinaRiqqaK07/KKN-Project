<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoticesResource\Pages;
use App\Filament\Resources\NoticesResource\RelationManagers;
use App\Models\Notices;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
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

class NoticesResource extends Resource
{
    protected static ?string $model = Notices::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Section::make()->schema([
                    SpatieMediaLibraryFileUpload::make('notices_image')
                        ->label('Cover Pengumuman')
                        ->columnSpan(2),
                    TextInput::make('title')
                        ->label('Judul Pengumuman')
                        ->columnSpan(2)
                        ->required(),
                    TextInput::make('notice_location')
                        ->label('Lokasi'),
                    DateTimePicker::make('notice_date')
                        ->label('Tanggal & Waktu')
                        ->required(),
                    Select::make('users_id')
                        ->relationship(name: 'users', titleAttribute: 'name')
                        ->label('Penerbit')
                        ->options(User::all()->pluck('name', 'id'))
                        ->searchable()
                        ->required(),
                    Toggle::make('status')
                        ->label('Posting')
                        ->inline(false)
                        ->declined()
                        ->onColor('success'),
                    RichEditor::make('content')
                        ->label('Isi Pengumuman')
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
                SpatieMediaLibraryImageColumn::make('notices_image')
                    ->label('Cover Pengumuman')
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul Pengumuman')
                    ->limit('25'),
                TextColumn::make('users.name')
                    ->label('Penerbit'),
                TextColumn::make('notice_location')
                    ->label('Lokasi'),
                TextColumn::make('notice_date')
                    ->label('Tanggal & Waktu')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->sortable(),
                ToggleColumn::make('status')
                    ->label('Is Published'),
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
            'index' => Pages\ListNotices::route('/'),
            'create' => Pages\CreateNotices::route('/create'),
            'edit' => Pages\EditNotices::route('/{record}/edit'),
        ];
    }
}
