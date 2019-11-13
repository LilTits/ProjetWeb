<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongstoMany(Image::class, 'image_product');
    }

    // Images
    public function events(){
        return $this->hasOne('App\Event');
    }
}
