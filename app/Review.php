<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->$this->belongsTo('App\User', 'id');
    }

    public function product(){
        return $this->$this->belongsTo('App\Product', 'id');
    }

}
