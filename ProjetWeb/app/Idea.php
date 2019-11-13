<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idea extends Model
{
    use SoftDeletes;
    
    //Table name
    protected $table = 'ideas';

    // Primery key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}