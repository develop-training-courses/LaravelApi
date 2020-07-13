<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function student (){

        return $this->belongsTo('App\Student');
        return $this->belongsTo('App\Price');
    }
}
