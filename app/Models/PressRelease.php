<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    protected $table='press_releases';
    protected $fillable=['title', 'image', 'publish_date', 'description', 'publish'];
}
