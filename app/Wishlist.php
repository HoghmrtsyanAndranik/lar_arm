<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public $table="wishlist";
    public $timestamps=false;

    public function photo(){
        return $this->hasMany('App\ProductPhoto','product_id', 'product_id');
    }

    public function product(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
