<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'product_types';

    // Primery key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
