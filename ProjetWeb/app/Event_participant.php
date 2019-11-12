<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event_participant extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'event_participants';

    // Primary Key
    protected $primaryKey = 'eparticipant_id';
}
