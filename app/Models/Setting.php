<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=['favicon','logo','footer','title','phone','email','website','address','meta_description','meta_keywords','twitter_url','facebook_url','linkedin_url','instagram_url',
        ];
}
