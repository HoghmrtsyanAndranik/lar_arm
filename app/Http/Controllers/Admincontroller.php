<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Product;

class Admincontroller extends Controller
{
    function adminHome(){
        return view('admin');
    }
    function getusers(){
        return Users::where("type", "!=", "admin")->get();
    }
    function getproducts(){
        return Product::where("active", 0)->get();
    }
}
