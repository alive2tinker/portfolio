<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuLinkResource\Pages;
use App\Filament\Resources\MenuLinkResource\RelationManagers;
use App\Models\MenuLink;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuLinkResource extends Resource
{
    protected static ?string $model = MenuLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name.ar')->label('name in arabic')->translateLabel(),
                TextInput::make('name.en')->label('name in english')->translateLabel(),
                TextInput::make('link'),
                Select::make('location')->options([
                    'top' => "Top",
                    'bottom' => "Bottom",
                    'both' => "Both"
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('link'),
                TextColumn::make('location'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListMenuLinks::route('/'),
            'create' => Pages\CreateMenuLink::route('/create'),
            'edit' => Pages\EditMenuLink::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
