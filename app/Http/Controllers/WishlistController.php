<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Wishlist;

class WishlistController extends Controller
{
    public function addToWishlist(Request $r){
        $wishlist = new Wishlist();
        $wishlist->user_id = Session::get("user_id");
        $wishlist->product_id = $r->id;
        $wishlist->save();
    }
}
