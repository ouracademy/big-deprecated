<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Infraestructure\Data\Repositories\EventRepository;
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
        
        
        /*
        $this->app->singleton(EventRepository::class, function () {
            $eventRepository = new EventRepository();
            $lean = Event::CONFERENCE("¿Por qué el Lean Startup lo va a cambiar todo ?");
            $lean->setTimePeriod(new TimePeriod(date_create('01-03-2016'), date_create('02-03-2016')));
            
            $startup = Event::CONFERENCE("STARTUP WEEKEND EBUSINESS");
            $startup->setTimePeriod(new TimePeriod(date_create('01-03-2016'), date_create('20-03-2016')));
            
            $xp = Event::CONFERENCE("Extreme Programming 20 years later by Kent Beck");
            $xp->setTimePeriod(new TimePeriod(date_create('01-03-2016'), date_create('04-05-2016')));
            
            $eventRepository->add($lean);
            $eventRepository->add($startup);
            $eventRepository->add($xp);
            
            return $eventRepository;
        });*/
    }
}
