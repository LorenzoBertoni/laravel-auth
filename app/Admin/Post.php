<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description'
    ];
}
