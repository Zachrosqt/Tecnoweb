<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function brand(){
        return $this->$this->belongsTo('App\Brand', 'id');
    }

    public function productPhoto(){
        return $this->$this->hasMany('App\ProductPhoto', 'id');
    }

}
