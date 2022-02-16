<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryImage extends Model
{
    protected $table = 'history_images';
    protected $fillable = ['title', 'slug', 'thumbnail_path', 'thumbnail', 'status'];
}
