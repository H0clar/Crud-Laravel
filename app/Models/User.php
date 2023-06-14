<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function isAdmin()
    {
        return $this->role->description === 'administrador';
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
