<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Domain;
use App\Models\Work;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('matricule')
                    ->required(),
                Forms\Components\TextInput::make('titre')
                    ->required(),
            Forms\Components\TextInput::make('auteur')
                ->required(),

                Forms\Components\TextInput::make('annee_academique'),
                Forms\Components\TextInput::make('code_classification'),
                Forms\Components\TextInput::make('nbre_pages')
                    ->required(),


                Forms\Components\TextInput::make('user_id')
                    ->numeric(),
                Forms\Components\Select::make('domain_id')
                    ->options(Domain::all()->pluck('intitule','id'))
                    ->required(),
            Forms\Components\FileUpload::make('path')
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->image(),
                Forms\Components\Toggle::make('publier')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('matricule')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titre')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('annee_academique')
                    ->searchable(),
                Tables\Columns\TextColumn::make('code_classification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nbre_pages')
                    ->searchable(),
                Tables\Columns\TextColumn::make('viewCount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('domain_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('publier')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
