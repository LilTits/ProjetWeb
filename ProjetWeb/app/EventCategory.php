<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event_category extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'event_categories';

    public function events()
    {
        return $this->hasMany('App\Event', 'ecategory_id');
    }
}
