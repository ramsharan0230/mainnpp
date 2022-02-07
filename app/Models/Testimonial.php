<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable=['name','rating','review','profile','status','designation',

        'meta_title',
        'meta_keywords',
        'meta_description',
        ];
}
