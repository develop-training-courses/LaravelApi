<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    protected $appends = ['companyDescription'];

    public function company() {

        return $this->belongsTo('App\Company')->select(['name']);
    }

    public function getCompanyDescriptionAttribute()
    {
        return $this->company->name;
    }  
}
