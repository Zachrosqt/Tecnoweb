<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishItem extends Model
{
    //Table Name
    protected $table = 'wish_items';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps =true;

    public function wishlist(){
        return $this->belongsTo('App\WishList');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
