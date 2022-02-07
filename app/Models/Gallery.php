<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Gallery extends Model
{
    use Sluggable;

    protected $fillable=['photo_title','photo','gallery_type','video_url', 'slug'];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'photo_title'
            ]
        ];
    }
    
    public function media(){
        return $this->hasMany(Media::class);
    }

}
