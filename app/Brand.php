<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function product(){
        return $this->$this->hasMany('App\Product', 'id');
    }
}
