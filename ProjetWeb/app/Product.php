<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    public function carts()
    {
        return $this->belongstoMany(Cart::class, 'cart_product');
    }

    public function orders()
    {
        return $this->belongstoMany(Order::class, 'order_product');
    }

    public function images()
    {
        return $this->belongstoMany(Image::class, 'image_product');
    }
}
