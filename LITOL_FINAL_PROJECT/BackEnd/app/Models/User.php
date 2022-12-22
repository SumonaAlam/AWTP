<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


    public function role()
    {
        return $this->hasOne(Role::class, 'role_id', 'role_id');
    }

    public $timestamps = false;


}
