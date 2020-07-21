<?php

namespace App\Http\Controllers;

use Facades\App\Helpers\Json;
use App\Shop;
use App\ShopCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $categories = ShopCategory::get();
        $result = compact('categories');
        json::dump($result);
        return view('home', $result);
    }
    //try using the relation lik where('shop_category.id', '=', 1)
    public function fastFoodIndex(){
        $shops = Shop::with('shop_category')->where('shop_category_id', '=', 1)->get();
        $result = compact('shops');
        json::dump($result);
        return view('shops.fastFood.index', $result);
    }

    public function fastFoodShop($id){
        $shop = Shop::with('products')->orderBy('name')->findOrFail($id);
        $result = compact('shop');
        json::dump($result);
        return view('shops.fastFood.shop', $result);
    }
}
