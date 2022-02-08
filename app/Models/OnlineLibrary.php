<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnlineLibrary extends Model
{
    protected $table = 'online_libraries';
    protected $fillable = ['title', 'subtitle', 'pulished_at', 'thumbnail', 'file', 'counts', 'slug', 'status'];
}
