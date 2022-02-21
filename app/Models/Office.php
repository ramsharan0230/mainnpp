<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use Sluggable;

    protected $table = 'offices';
    protected $fillable = ['province_id', 'district', 'municipality', 'ward', 'name', 'slug', 'address', 'telephone', 
    'president', 'fax', 'email', 'publish'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
