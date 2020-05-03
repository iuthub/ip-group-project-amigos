<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLunch extends Model
{
    protected $fillable = ['lunch_name', 'lunch_price', 'lunch_description'];
}
