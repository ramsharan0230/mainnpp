<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectiontitle extends Model
{
    use HasFactory;

    protected $fillable=[
            'welcome_title','welcome_content','welcome_image',
            'principle_title','principle_content','principle_image',
            'chairman_title','chairman_content','chairman_image',
            'about_us_content','admission_content','why_samata_school',
        ];

}
