<?php

namespace App\Repo\Eloquent;

use App\Models\OnlineLibrary;
use App\Repo\OnlineLibraryInterface;


class OnlineLibraryRepo extends BaseRepo implements OnlineLibraryInterface{
 
    protected $model;

    public function __construct(OnlineLibrary $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSpacificLibraryBySlug($slug){
        $pressRelease = $this->model->where('slug', $slug)->first();
        return $pressRelease;
    }
}