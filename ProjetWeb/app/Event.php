<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //Table name
    protected $table = 'events';

    // Primery key
    public $primaryKey = 'event_id';

    // Timestamps
    public $timestamps = true;
}
