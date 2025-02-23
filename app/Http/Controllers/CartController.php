<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }     
    //
    public function addToCart(Product $product) 
    {
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => 1,
            'device_os_description' => $product->device_os_description,
            'image_url' => $product->image_url,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index');
    }

    public function cartItems() 
    {
        $items = \Cart::getContent();
        return view('cart')->with([
            'items' => $items
        ]);
    }

    public function incrementQ(Product $product)
    {
        \Cart::update($product->id, array(
            'quantity' => 1, 
        ));
        return redirect()->route('cart.index');
    }

    public function decrementQ(Product $product)
    {
        \Cart::update($product->id, array(
            'quantity' => -1, 
        ));
        return redirect()->route('cart.index');
    }

    public function removeFromCart(Product $product)
    {
        \Cart::remove($product->id);
        return redirect()->route('cart.index');
    }
}


                                                    
                                                