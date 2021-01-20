<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\Product;
use App\OrderDetails;
use Illuminate\Support\Carbon;
use Stripe;

class OrderController extends Controller
{
//    public function order(){
//        $order = new Order();
//        $order->user_id = Session::get(('user_id'));
//
//        //getting totalsum
//        $cartproducts = Cart::where('user_id',Session::get(('user_id')))->get();
//        $totalSum = 0;
//        foreach ($cartproducts as $cp){
//
//            //update product table count
//            $upd = Product::where('id',$cp->product->id)->first();
//            $updCount = $upd->count;
//            $updCount -= $cp->count;
//            $upd->count = $updCount;
//            $upd->save();
////            $affected = DB::table('users')
////                ->where('id', 1)
////                ->update(['votes' => 1]);
//            //end updating product count
//
//
//
//            $price = $cp->product->price;
//            $count = $cp->count;
//            $sum = $price*$count;
//            $totalSum += $sum;
//        }
////        $purchases = DB::table('transactions')
////            ->join('categories', 'transactions.category_id', '=', 'categories.id')
////            ->where('categories.kind', '=', 1)
////            ->sum('transactions.amount');
//        //end of getting totalsum
//
//        $order->total = $totalSum;
//        $order->date = Carbon::today();
//        $order->save();
//
////        Cart::where('user_id',Session::get('user_id'))->delete();
//
//        foreach($cartproducts as $cp){
//            //filling orderdetails
//            $orderDetails = new OrderDetails();
//            $orderDetails->order_id = $order->id;
//            $orderDetails->product_id = $cp->product_id;
//            $orderDetails->count = $cp->count;
//            $orderDetails->save();
//            //end of filling details
//        }
//
//    }// end function order


    public function stripe(){
        $cartproducts = Cart::where('user_id',Session::get(('user_id')))->get();
        $totalSum = 0;

        foreach ($cartproducts as $cp){
            $price = $cp->product->price;
            $count = $cp->count;
            $sum = $price*$count;
            $totalSum += $sum;
        }
        return view('stripe')->with("totalSum",$totalSum);
    }

    public function stripePost(Request $request){
        $cartproducts = Cart::where('user_id',Session::get(('user_id')))->get();
        $totalSum = 0;
        foreach ($cartproducts as $cp){
            $price = $cp->product->price;
            $count = $cp->count;
            $sum = $price*$count;
            $totalSum += $sum;
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => 100 * $totalSum,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');



        $order = new Order();
        $order->user_id = Session::get(('user_id'));

        $order->total = $totalSum;
        $order->date = Carbon::today();
        $order->save();


        foreach($cartproducts as $cp){
            $upd = Product::where('id',$cp->product->id)->first();
            $updCount = $upd->count;
            $updCount -= $cp->count;
            $upd->count = $updCount;
            $upd->save();
            //filling orderdetails
            $orderDetails = new OrderDetails();
            $orderDetails->order_id = $order->id;
            $orderDetails->product_id = $cp->product_id;
            $orderDetails->count = $cp->count;
            $orderDetails->save();
            //end of filling details
        }

        Cart::where('user_id',Session::get('user_id'))->delete();
        return Redirect::to('/orderHistory');

    }

    public function orderHistory(){
        $orders = Order::where('user_id',Session::get("user_id"))->get();
//        dd($orders[0]);
        return view('myorders')->with('orders',$orders);
    }

    public function viewOrderDetails($id){
        $order = OrderDetails::where('order_id',$id)->get();
//        dd($order[0]->product);
        return view('myOrderDetails')->with('order',$order);
    }

    public function writeFeedback(Request $r){
//        dd($r->id);
        $order = OrderDetails::where('id',$r->id)->first();
        $order->feedback = $r->feedback;
        $order->save();
    }

    public function evStars(Request $r){
        $order = OrderDetails::where('id', $r->orderDetailId)->first();
        $order->stars = $r->starId;
        $order->save();
    }

}// end controller
