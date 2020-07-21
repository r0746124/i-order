<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function shop_category(){
        return $this->belongsTo('App\ShopCategory');
    }

    //a shop has many products
    public function products(){
        return $this->hasMany('App\Product');
    }

}
