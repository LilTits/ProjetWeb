<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public function permissions()
    {
        return $this->belongstoMany(Permission::class, 'permission_role');
    }

    public function users()
    {
        return $this->belongstoMany(User::class, 'role_user');
    }
}
