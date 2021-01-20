<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;
use Redirect;

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
        // echo '<pre>';
        // foreach($cart as $c){
           
        //     print_r($c);
        //    // echo $c->count;
        // }
      return view('shoppingCart')->with('cart',$cart);
    }
  public function  updateCart(Request $r){
        $UpdateDetails = Cart::where('id', $r->id)->first();
        $UpdateDetails->count=$r->quantity;
        $UpdateDetails->save();


  }
  public function deleteCart(){
  
    Cart::where('user_id',Session::get('user_id'))->delete();
    return Redirect::to('/');


  }
    public function deleteCartProduct($id){
        Cart::where('id',$id)->delete();
        return Redirect::to('/cart');
    }
}
