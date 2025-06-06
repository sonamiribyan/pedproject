<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use App\Repositories\CourseRepository;
use Illuminate\Support\Facades\Gate;
Use App\Models\Course;
use App\Observers\CourseObserver;
use App\Policies\CoursePolicy;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        Gate::policy(Course::class, CoursePolicy::class);
        Course::observe(CourseObserver::class);
    }
}
