<?php

namespace App\Listeners;

use App\Events\CourseCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendCourseCreatedEmail
{

    /**
     * Handle the event.
     */
    public function handle(CourseCreated $event): void
    {
        Log::info('course created');
    }
}
