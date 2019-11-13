<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;
    
    //Table name
    protected $table = 'events';

    // Primery key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function cover()
    {
        return $this->belongsTo('App\Image', 'image_cover');
    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'creator');
    }

    public function category()
    {
        return $this->belongsTo('App\EventCategory', 'ecategory_id');
    }
}
