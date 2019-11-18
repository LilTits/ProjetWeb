<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    //Table name
    protected $table = 'products';

    // Primery key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
    
    public function carts()
    {
        return $this->hasMany('App\Cart');
    }
    
    public function orders()
    {
        return $this->belongstoMany(Order::class, 'order_product');
    }

    public function images()
    {
        return $this->belongstoMany(Image::class, 'image_product');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function type()
    {
        return $this->belongsTo('App\ProductType', 'ptype_id');
    }
}