<?php

namespace App\Repo;

interface BaseInterface {
    
    public function getAll($sortBy,$limit);

    public function create(array $data);
  

    public function update($id, array $data);
    
    public function insert(array $data);

    public function delete($id);

    public function getSpecificById($id);

    public function getAllWithParam(array $parameter, $path);

    public function getSpecificByColumnValue($column,$value);

}