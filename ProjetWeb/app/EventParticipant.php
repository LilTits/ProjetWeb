<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventParticipant extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'event_participants';

    // Primary Key
    protected $primaryKey = 'id';

    public function event()
    {
        return $this->belongsTo('App\Event', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
