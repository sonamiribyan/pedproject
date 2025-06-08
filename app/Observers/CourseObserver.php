<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendCourseCreatedEmail;
use App\Events\CourseCreated;
class CourseObserver
{
    /**
     * Handle the Course "created" event.
     */
    public function created(Course $course): void
    {
        event(new CourseCreated($course));
        SendCourseCreatedEmail::dispatch($course);
    }

    /**
     * Handle the Course "updated" event.
     */
    public function updated(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "deleted" event.
     */
    public function deleted(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "restored" event.
     */
    public function restored(Course $course): void
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     */
    public function forceDeleted(Course $course): void
    {
        //
    }
}
