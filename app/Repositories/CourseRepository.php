<?php

namespace app\Repositories;

use App\Repositories\Interfaces\CourseRepositoryInterface;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository implements CourseRepositoryInterface
{
    public function all(): Collection
    {
        return Course::all();
    }
    public function find(int $id)
    {
        return Course::find($id);
    }
    public function create(array $data)
    {
        return Course::create($data);
    }
    public function update($id, $data)
    {
        $course = Course::findOrFail($id);
        $course->update($data);
        return $course;
    }
    public function delete($id)
    {
        return Course::destroy($id);
    }
}
