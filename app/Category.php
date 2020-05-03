<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'categoryName'
    ];

    public function profucts()
    {
    	return $this->hasMany('App\Products');
    }
}
