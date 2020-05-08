<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'food_type', 'food_number', 'food_price',
        'recived', 'address', 'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
