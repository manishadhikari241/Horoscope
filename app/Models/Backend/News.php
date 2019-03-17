<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'image', 'description'];
}
