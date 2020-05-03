<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryName'
    ];

    public function products()
    {
    	return $this->hasMany('App\Products');
    }
}
