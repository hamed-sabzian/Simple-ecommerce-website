<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    public function index(){

        try {
            $page = Request::input('page', 1);

            //Check if there is products list page in cache storage, return it 
            //otherwise query from database and add it to cache storage
            $products = Cache::rememberForever('products_list_page_'.$page, function() {
                return Product::paginate(6);
            });

            return view('products.index',['products'=>$products]);

        } catch (\Exception $e) {
            return view('products.index',['error_message'=>'There is a problem displaying the products.']);
        }

    }
}
