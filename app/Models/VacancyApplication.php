<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    use HasFactory;

    protected $fillable=['vacancy_id','name','dob','gender','address','education','is_completed','institution','experience','last_designation','last_org','expected_salary','bike','license',
        'email','phone','message'];

}
