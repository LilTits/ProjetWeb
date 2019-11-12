<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    // Primary Key
    protected $primaryKey = 'order_id';

    public function products()
    {
        return $this->belongstoMany(Product::class, 'order_product');
    }
}
