<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function peoples()
    {
        return $this->hasMany('App\People');
    }
}
