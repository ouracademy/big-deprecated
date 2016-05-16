<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Data\EventRepository;
use App\Domain\Event\Event;
use App\Domain\Time\TimePoint;

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
            $lean = Event::CONFERENCE("¿Por qué el Lean Startup lo va a cambiar todo ?");
            $lean->setTimeReference(TimePoint::createFromDate(01, 03, 2016));
            
            $startup = Event::CONFERENCE("STARTUP WEEKEND EBUSINESS");
            $startup->setTimeReference(TimePoint::createFromDate(20, 03, 2016));
            
            $xp = Event::CONFERENCE("Extreme Programming 20 years later by Kent Beck");
            $xp->setTimeReference(TimePoint::createFromDate(04, 05, 2016));
            
            $eventRepository->add($lean);
            $eventRepository->add($startup);
            $eventRepository->add($xp);
            
            return $eventRepository;
        });
    }
}
