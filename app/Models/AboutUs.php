<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable=[
        'about_us_content',
        'about_us_image_path',
        'our_mission_image_path',

        'icon_path1',
        'icon_path2',
        'icon_path3',

        'content1',
        'content2',
        'content3',

        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
