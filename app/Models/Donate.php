<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;

    protected $fillable=['gift_type','gift_amount','first_name','last_name','email','phone','message','donate_type','honour_person','tribute_person','tribute_message','additional_amount'];
}
