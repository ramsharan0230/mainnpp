<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable=['title','posted_by','quote','slug','content','image','image_path','status','meta_title','meta_descriptions','meta_keywords'];

    public function blog_categories(){
        return $this->belongsToMany(BCategory::class,'blog_categories','blog_id','bcategory_id');
    }

    public function blog_tags(){
        return $this->belongsToMany(BTag::class,'blog_tags','blog_id','tag_id');
    }

    public function comments(){
        return $this->hasMany(BlogComment::class);
    }

}
