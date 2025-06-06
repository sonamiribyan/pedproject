<?php

namespace App\Repositories\Interfaces;

interface   CourseRepositoryInterface
{
    public function all();
    public function find(int $id);
    public function create(array $data);
    public function update($id,$data);
    public function delete($id);
}