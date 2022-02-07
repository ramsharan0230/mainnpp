<?php

namespace App\Repo\Eloquent;

use App\Models\Member;
use App\Repo\MemberInterface;


class MemberRepo extends BaseRepo implements MemberInterface{
 
    protected $model;

    public function __construct(Member $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSpacificMember($id){
        $member = Member::where('id', $id)->first();
        return $member;
    }
}