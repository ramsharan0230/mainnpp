<?php

namespace App\Repo\Eloquent;

use App\Models\NewsEvent;
use App\Repo\NewsEventInterface;


class NewsEventRepo extends BaseRepo implements NewsEventInterface{
 
    protected $model;

    public function __construct(NewsEvent $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getNewsEventBySlug($slug){
        $newsEvent = NewsEvent::where('slug', $slug)->first();
        return $newsEvent;
    }
}