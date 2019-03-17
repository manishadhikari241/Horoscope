<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    protected $fillable = ['title', 'description', 'image'];
}