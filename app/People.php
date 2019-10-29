<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table ='peoples';
    
    public function city(){
        return $this->belongsTo('App\City');
    }
}
