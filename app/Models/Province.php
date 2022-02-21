<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['name', 'slug', 'publish'];

    public function offices(){
        return $this->hasMany(Office::class);
    }
}
