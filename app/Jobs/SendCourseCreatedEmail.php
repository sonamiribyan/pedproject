<?php

namespace App\Jobs;

use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseCreatedMail;

class SendCourseCreatedEmail implements ShouldQueue
{
        use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }
     public function handle(): void
    {
        
        Mail::to('user@gmail.com')->send(new CourseCreatedMail($this->course));
    }
}
