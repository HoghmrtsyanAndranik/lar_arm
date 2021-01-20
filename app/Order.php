<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = "orders";
    public $timestamps = false;

    public function orderDetails(){
        return $this->hasMany('App\OrderDetails',"order_id","id");
    }
}
