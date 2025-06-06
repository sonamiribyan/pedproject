<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use App\Http\Resources\CourseResourse;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Gate;
use App\Models\Course;
class CourseController extends Controller
{
    public  $courseRepository;
    public function __construct(CourseRepositoryInterface $courseRepositoryInterface)
    {
        $this->courseRepository = $courseRepositoryInterface;
    }
    public function index(): mixed
    {
        $courses = $this->courseRepository->all();
        return  CourseResourse::collection($courses);
    }
    public function store(CourseRequest $courseRequest): CourseResourse
    {
        $course = $this->courseRepository->create($courseRequest->validated());
        return new CourseResourse($course);
    }
}
