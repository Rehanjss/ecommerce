<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class StoreController extends Controller
{
    //
    public function search(Request $request): View
    {
        $products  = null;
        $searchTitle = '';
        $searchTotalFound = 0;
        if ($request->has('title')) {
            $searchTitle = $request->input('title');
            $products = Product::where('title', 'like', "%$searchTitle%")->get();
        } else {
            $products = Product::all();
        }

        $searchTotalFound = count($products);
        //dd($searchTitle);
        return view('store', compact('products', 'searchTitle', 'searchTotalFound'));
    } 
    
    public function index(Request $request): View
    {
        $searchTitle = '';
        $products = Product::all();
        $searchTotalFound = count($products);
        return view('store', compact('products', 'searchTitle', 'searchTotalFound'));
    }     
}
