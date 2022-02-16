<?php

namespace App\Repo\Eloquent;

use App\Models\HistoryImage;
use App\Repo\HistoryImageInterface;


class HistoryImageRepo extends BaseRepo implements HistoryImageInterface{
 
    protected $model;

    public function __construct(HistoryImage $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getHistoryImageBySlug($slug){
        $historyImage = $this->model->where('slug', $slug)->first();
        return $historyImage;
    }
}