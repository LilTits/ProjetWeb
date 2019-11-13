<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

