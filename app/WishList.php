<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    //Table Name
    protected $table = 'wish_lists';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps =true;

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function items(){
        return $this->hasMany('App\WishItem');
    }
}
