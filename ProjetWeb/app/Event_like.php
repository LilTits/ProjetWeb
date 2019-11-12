<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event_like extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'event_likes';
}
