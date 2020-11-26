<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug, $categoryId)
    {
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        $categoryNameTitle = Category::where('id', $categoryId)->first();

        $products = Product::where('category_id', $categoryId)->paginate(15);
        // dd($products);


        return view('product.category.list', compact('categoriesLimit', 'products', 'categoryNameTitle'));
    }
}