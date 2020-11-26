<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $sliders = Slider::latest()->get();
        $categories = Category::where('parent_id', 0)->get();
        $products = Product::latest()->take(10)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(8)->get();
        $categoriesLimit = Category::where('parent_id', 0)->take(3)->get();
        // DB::enableQueryLog();
        // $productTabGiay = $this->category->find(5)->products;
        // $quries = DB::getQueryLog();
        // dd($quries);
        return view('home.home', compact('sliders', 'categories', 'products', 'productsRecommend', 'categoriesLimit'));
    }
}