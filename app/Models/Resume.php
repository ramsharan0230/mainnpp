<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable=['name','dob','gender','address','education','is_completed','institution','experience','last_designation','last_org','expected_salary','bike','license','attachment',
        'preferred_dep','email','phone','message'];

}
