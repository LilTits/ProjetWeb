<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongstoMany(Product::class, 'order_product');
    }

    public function customer()
    {
        return $this->belongsTo('App\User');
    }

    public function adress()
    {
        return $this->belongsTo('App\Adress');
    }
}
