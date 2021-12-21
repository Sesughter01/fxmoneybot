<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function fxmoneyrobot(){
        return view('fxmoneyrobot');
    }
    public function algotrading(){
        return view('algotrading');
    }
    public function brokerpartners(){
        return view('brokerpartners');
    }
    public function passiveincome(){
        return view('passiveincome');
    }
    public function about(){
        return view('about');
    }
    
    public function cart(){
        
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    
    

}
