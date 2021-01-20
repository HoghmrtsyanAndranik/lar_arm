<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;
use Redirect;
use Validator;
use Session;
use App\Cart;

class ProductController extends Controller
{
    public function products(){
     
        $products = Product::where("user_id","!=",Session::get("user_id"))->get();
        $cart = Cart::where("user_id","=",Session::get("user_id"))->get();
        return view("products")->with("products",$products)->with("cart",$cart);

    }

    public function addProduct(){

        return view("addProduct");
    }

    public function myProducts(){
        $products = Product::where("user_id","=",Session::get("user_id"))->get();
       //  echo '<pre>';
       //  foreach($products as $p)
       // foreach($p->photo as $p1){
       //   print_r($p1->url);die;
       // }
        return view("myProduct")->with("products",$products);
    }

    public function addNewProduct(Request $r){
      //dd($r->all());die;
      $validator = Validator::make($r->all(), [
            'name' => 'required',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'description' => 'required'
            
        ]);

        if ($validator->fails()) {

            return redirect('/addproduct')
                        ->withErrors($validator)
                        ->withInput();
        }


        $product = new Product();
        $product->name = $r->name;
        $product->price = $r->price;
        $product->count = $r->count;
        $product->description = $r->description;
        $product->user_id = Session::get("user_id");
        $product->active=1;
        $product->save();
        // dd($product->id);

        if($r->hasfile('photo'))
        {
           foreach($r->file('photo') as $image)
           {
               $name=time().$image->getClientOriginalName();
               $image->move(public_path().'/img/', $name);
               $photo = new ProductPhoto;
               $photo->url = $name;
               $photo->product_id = $product->id;

               $photo->save();
           }
        }
        return Redirect::to('/addproduct');

    }
    public function deleteProduct($id){
        Product::where("id","=",$id)->delete();
         return Redirect::to('/myproduct');


    }
    public function item($id){
        //dd($id);
        $product = Product::where('id',$id)->first();
       
        return view('productitem')->with('product',$product);
    }

    public function myitem($id){
        $product = Product::where('id',$id)->first();

        return view('myproductitem')->with('product',$product);
    }

    public function editmyitem($id){
        $product = Product::where('id',$id)->first();
        return view('myproductEdititem')->with('product',$product);
    }
//    public function m

    public function editmyitemdata(Request $r){

     
        Product::where('id',$r->id)->update(['name' => $r->name, 'price' => $r->price, 'count' => $r->count, 'description' => $r->description]);
          if($r->hasfile('photo'))
            {
               foreach($r->file('photo') as $image)
               {
                   $name=time().$image->getClientOriginalName();
                   $image->move(public_path().'/img/', $name);
                   $photo = new ProductPhoto;
                   $photo->url = $name;
                   $photo->product_id = $r->id;
                   $photo->save();
               }
            }
        return Redirect::to('/myproduct/item/'.$r->id);
    }

    public function  deleteItemPhoto($id){
        //$photo = ProductPhoto::where('id',$id)->first();

        ProductPhoto::where('id',$id)->delete();

        return Redirect::to('/myproduct/item/'.$photo->product_id);
    }


}
