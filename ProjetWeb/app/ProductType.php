<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class ProductType extends Model
{
    use SoftDeletes;
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'product_types.name' => 10,
            'product_types.description' => 5,
            'product_categories.name' => 2,
        ],
        'joins' => [
            'product_categories' => ['product_categories.id','product_types.pcategory_id'],
        ],
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'ptype_id');
    }

    public function category()
    {
        return $this->belongsTo('App\ProductCategory', 'pcategory_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'product_id');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart', 'product_id');
    }
}
