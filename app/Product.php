<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //a product belongs to one shop
    public function shop(){
        return $this->belongsTo('App\Shop')->withDefault();
    }

}
