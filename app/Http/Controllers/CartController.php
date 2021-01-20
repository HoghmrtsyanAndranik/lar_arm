<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;


class CartController extends Controller
{
    public function addToCart(Request $r){
        $cart = Cart::where(['user_id'=>Session::get('user_id'), 'product_id'=>$r->id])->first();
        if($cart){
            $cart->count++;
            $cart->save();
        }else{
            $cart = new Cart();
            $cart->user_id = Session::get("user_id");
            $cart->product_id = $r->id;
            $cart->count = 1;
            $cart->save();
        }
    }


    public function  viewCart(){
        $cart = Cart::where('user_id',Session::get('user_id'))->get();
        return view('shoppingCart')->with('cart',$cart);
    }

    public function deleteCartProduct($id){
        Cart::where('user_id',Session::get('user_id'))->where('product_id',$id)->delete();
        return Redirect::to('/cart');
    }
}
