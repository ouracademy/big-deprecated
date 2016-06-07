<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Infraestructure\Data\Repositories\EventRepository;
use App\Infraestructure\Data\Repositories\UserRepository;
use App\Domain\Event\Event;
use App\Domain\Time\TimePeriod;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Domain\Event\EventRepository', function($app){
            return new EventRepository($app['em']);
        });
        
        $this->app->bind('App\Domain\User\UserRepository', function($app){
            return new UserRepository($app['em']);
        });
    }
}
