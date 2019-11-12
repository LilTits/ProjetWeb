<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Primary Key
    protected $primaryKey = 'cart_id';

    public function products()
    {
        return $this->belongstoMany(Product::class, 'cart_product');
    }
}
