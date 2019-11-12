<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    public function roles()
    {
        return $this->belongstoMany(Role::class, 'permission_role');
    }

    public function users()
    {
        return $this->belongstoMany(User::class, 'permission_user');
    }
}
