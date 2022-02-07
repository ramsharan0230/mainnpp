<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class NewsEvent extends Model
{
    use Sluggable;
    
    protected $fillable=['title','start_date','venue','banner','news','news_detail','image', 'slug', 'publish'];
    
    protected $table = 'news_events';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
