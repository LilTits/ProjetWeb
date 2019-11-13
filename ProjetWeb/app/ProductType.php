<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;
    public $timestamps = true;

    // Table Name
    protected $table = 'product_types';
    // Primery key

    public $primaryKey = 'id';

    // Timestamps

    public function products()
    {
        return $this->hasMany('App\Product', 'ptype_id');
    }

    public function category()
    {
        return $this->belongsTo('App\ProductCategory', 'pcategory_id');
    }
}
