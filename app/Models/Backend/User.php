<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'username', 'email', 'password', 'image'];
}
