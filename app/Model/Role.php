<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $fillable = [
        'name', 'description','user_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }

}
