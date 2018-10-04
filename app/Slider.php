<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function Photo(){
        return $this->$this->hasMany('App\Photo', 'id');
    }

}
