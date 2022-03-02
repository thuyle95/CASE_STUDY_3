<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::all();
        return view('front.index', compact('products','categories'));
    }
    public function getCategories() {
        $categories = Category::all();
        return view('back.create', compact('categories'));
    }
    public function getProduct() {
        $products = Product::all();
        $categories = Category::all();
        $params = [
            'products' => $products,
            'categories'    => $categories
        ];
        return view('front.products', $params);
    }

}
