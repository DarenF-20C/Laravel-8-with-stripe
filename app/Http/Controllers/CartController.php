<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Models\myCart;
use App\Models\Product;


class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function add(){
        $r=request();

        $addCart=myCart::create([
            'productID'=>$r->productID,
            'quantity'=>$r->quantity,
            'userID'=>Auth::id(),
            'orderID'=>'',
        ]);
        Session::flash('success',"Product added into Cart!");
        return redirect()->route('showProduct');
    }
}
