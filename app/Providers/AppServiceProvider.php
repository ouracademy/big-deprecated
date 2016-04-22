<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Data\EventRepository;
use App\Domain\Event\Event;
use App\Time\TimePoint;

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
        $this->app->singleton(EventRepository::class, function () {
            $eventRepository = new EventRepository();
            $lean = new Event("¿Por qué el Lean Startup lo va a cambiar todo ?", Event::CONFERENCE);
            $lean->setTimeReference(TimePoint::createFromDate(01, 03, 2016));
            
            $startup = new Event("STARTUP WEEKEND EBUSINESS", Event::CONFERENCE);
            $startup->setTimeReference(TimePoint::createFromDate(20, 03, 2016));
            
            $xp = new Event("Extreme Programming 20 years later by Kent Beck", Event::CONFERENCE);
            $xp->setTimeReference(TimePoint::createFromDate(04, 05, 2016));
            
            $eventRepository->add($lean);
            $eventRepository->add($startup);
            $eventRepository->add($xp);
            
            return $eventRepository;
        });
    }
}
