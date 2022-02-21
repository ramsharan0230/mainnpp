<?php

namespace App\Repo\Eloquent;

use App\Models\Office;
use App\Repo\OfficeInterface;


class OfficeRepo extends BaseRepo implements OfficeInterface{
 
    protected $model;

    public function __construct(Office $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSpacificOfficeBySlug($slug){

        $office = $this->model->where('slug', $slug)->with('province')->first();

        return $office;
    }
}