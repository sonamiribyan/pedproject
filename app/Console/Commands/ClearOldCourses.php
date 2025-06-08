<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ClearOldCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'courses:clear-old';
    protected $description = 'Удаляет курсы, которым больше 1 года';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('created new command');
    }
}
