<?php

namespace App\Repo\Eloquent;

use App\Models\Gallery;
use App\Repo\GalleryInterface;


class GalleryRepo extends BaseRepo implements GalleryInterface{
 
    protected $model;

    public function __construct(Gallery $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getGalleryBySlug($slug){
        $gallery = Gallery::where('slug', $slug)->first();
        return $gallery;
    }
}