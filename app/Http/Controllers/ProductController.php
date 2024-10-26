<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        $categoryId = $request->query('category_id');
        $marcaId = $request->input('brand_id');

        $products = Product::when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->when($marcaId, function ($query, $marcaId) {
            return $query->where('brand_id', $marcaId);
        })->get();

        //$Products = Product::all();
        $categoryId = Category::all();
        $marcaId = Brand::all(); 
        return view('products', compact('products', 'categoryId', 'marcaId'));
    }
}
