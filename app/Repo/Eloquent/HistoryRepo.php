<?php

namespace App\Repo\Eloquent;

use App\Models\History;
use App\Repo\HistoryInterface;


class HistoryRepo extends BaseRepo implements HistoryInterface{
 
    protected $model;

    public function __construct(History $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getHistory(){
        $history = $this->model->where('status', 'active')->first();
        return $history;
    }
}