<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongstoMany(Product::class, 'cart_product');
    }

    public function customer()
    {
        return $this->belongsTo('App\User');
    }
}
