<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Add product to cart
     * 
     * @param float $price price of product
     * @param string $desc product description
     * 
     * @return view
     */
    public function addToCart($price, $desc)
    {
        $cart = (session('cart')) ? session('cart') : array() ;
        $product = ['price'=>$price, 'desc'=>$desc];
        array_push($cart, $product);
        session(['cart'=>$cart]);
        session()->flash('success-msg', 'Item added to cart successfully');
        return back();
    }

    /**
     * Remove item from cart
     * 
     * @param int $index array index of product on cart
     * 
     * @return void
     */
    public function removeFromCart($index)
    {
        $cart = session('cart');
        unset($cart, $index);
        session('cart', $cart);
        session()->flash('success-msg', 'Item removed from cart successfully');
        return back();
    }
}
