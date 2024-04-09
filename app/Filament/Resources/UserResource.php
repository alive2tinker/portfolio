<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('email'),
                FileUpload::make('word_cv')->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/msword']),
                FileUpload::make('pdf_cv')->acceptedFileTypes(['application/pdf']),
                KeyValue::make('meta.main_description')->columnSpan(2),
                KeyValue::make('meta.sub_description')->columnSpan(2),
                KeyValue::make('meta.rights')->columnSpan(2),
                KeyValue::make('meta.projects_header')->columnSpan(2),
                KeyValue::make('meta.projects_subheader')->columnSpan(2),
                KeyValue::make('meta.articles_header')->columnSpan(2),
                KeyValue::make('meta.articles_subheader')->columnSpan(2),
                KeyValue::make('meta.services_header')->columnSpan(2),
                KeyValue::make('meta.services_subheader')->columnSpan(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('created_at')->label('joined at')->translateLabel(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
