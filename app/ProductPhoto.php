<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $table = 'productphotos';
    public $timestamps = true;

    public function product(){
        return $this->$this->belongsTo('App\Product', 'id');
    }

    public function photo(){
        return $this->$this->hasMany('App\Photo', 'id');
    }

}
