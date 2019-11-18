<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Review extends Model
{
    use SoftDeletes;

    public function reviewAuthor()
    {
        return $this->belongsTo('App\User', 'author');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
