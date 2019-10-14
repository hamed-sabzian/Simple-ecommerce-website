<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(){

        try {
            
            //Check if there is latest products in cache storage return it 
            //otherwise query from database and add it to cache storage
            $products = Cache::rememberForever('latest_products', function() {
                return Product::orderBy('id', 'desc')->take(6)->get();
            });

            return view('welcome',['products'=>$products]);

        } catch (\Exception $e) {
            return view('welcome',['error_message'=>'There is an problem for load products.']);
        }
    }
}
