<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchServices\ProductSearchService;

class SearchController extends Controller
{
    public function index(Request $request){

        try {

            $productSearchService = resolve(ProductSearchService::class);
            $products = $productSearchService->applyFilter($request);

            return view('search.index',['products'=>$products]);

        } catch (\Exception $e) {
            return view('search.index',['error_message'=>'There is a problem displaying the products.']);
        }
        
    }
}
