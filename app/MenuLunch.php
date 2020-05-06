<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLunch extends Model
{
    protected $fillable = ['food_name', 'food_price', 'food_description', 'food_image', 'category_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
