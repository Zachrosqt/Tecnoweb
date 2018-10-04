<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function productPhoto(){
        return $this->$this->belongsTo('App\ProductPhoto', 'id');
    }

    public function Slider(){
        return $this->$this->hasMany('App\Slider', 'id');
    }

}
