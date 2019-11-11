<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    //Table name
    protected $table = 'ideas';

    // Primery key
    public $primaryKey = 'idea_id';

    // Timestamps
    public $timestamps = true;
}
