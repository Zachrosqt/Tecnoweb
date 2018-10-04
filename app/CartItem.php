<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //Table Name
    protected $table = 'cart_items';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps =true;

    public function cart(){
        return $this->belongsTo('App\Cart');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
