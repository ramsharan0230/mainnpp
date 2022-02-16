<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurGoal extends Model
{
    protected $fillable=['title','slug','content','subtitle','cover_image'];
}
