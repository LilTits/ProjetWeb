<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event_category extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'event_categories';

    // Primary Key
    protected $primaryKey = 'ecategory_id';
}
