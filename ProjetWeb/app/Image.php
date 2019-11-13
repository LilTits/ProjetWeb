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

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function events()
    {
        return $this->hasMany('App\Event', 'image_cover');
    }
}
