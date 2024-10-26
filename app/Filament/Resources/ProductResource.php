<?php

namespace App\Filament\Resources;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre de producto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->label('Descripción del producto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('regular_price')
                    ->label('Precio')
                    ->required(),
                Forms\Components\TextInput::make('last_to_price')
                    ->label('Promoción')
                    ->required(),
                    Forms\Components\TextInput::make('stock')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('category_id')
                    ->label('Categoría')
                    ->relationship('category', 'name')
                    ->required()->searchable(),
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required()->searchable()
                    ->label('Marca'),
                FileUpload::make('imagen')
                    ->label('Imagen del Producto')
                    ->image()
                    ->directory('IMGproductos') 
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
             Tables\Columns\TextColumn::make('name')
                 ->label('Nombre del Producto')
                 ->sortable()
                 ->searchable(),

             Tables\Columns\TextColumn::make('description')
                 ->label('Descripción')
                 ->sortable()
                 ->limit(30)
                 ->searchable(),

             Tables\Columns\TextColumn::make('regular_price')
                 ->label('Precio')
                 ->money('usd')  
                 ->sortable(),
             Tables\Columns\TextColumn::make('last_to_price')
                 ->label('Promoción')
                 ->money('usd') 
                 ->sortable(),
             Tables\Columns\TextColumn::make('stock'),
             Tables\Columns\TextColumn::make('category.name')->label('Categoría')->searchable(),
             Tables\Columns\TextColumn::make('brand.name')->label('Marca')->searchable(),
             ImageColumn::make('imagen')
                ->label('Imagen')
                ->disk('public') 
                ->height(30), 
             
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
