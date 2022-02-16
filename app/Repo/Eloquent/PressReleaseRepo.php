<?php

namespace App\Repo\Eloquent;

use App\Models\OurGoal;
use App\Repo\PressReleaseInterface;


class PressReleaseRepo extends BaseRepo implements PressReleaseInterface{
 
    protected $model;

    public function __construct(OurGoal $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSpacificPressReleaseBySlug($slug){
        $pressRelease = $this->model->where('slug', $slug)->first();
        return $pressRelease;
    }
}