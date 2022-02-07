<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';
    protected $fillable = ['title', 'gallery_id', 'publish'];


    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
