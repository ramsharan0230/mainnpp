<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BTag extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','status'];

    public function blogs(){
        return $this->belongsToMany(Blog::class);
    }
}
