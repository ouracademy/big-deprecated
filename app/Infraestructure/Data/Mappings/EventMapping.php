<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Event\Event;
use App\Domain\Event\Ticket;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;
use App\Domain\Time\TimePeriod;

class EventMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Event::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        $builder->increments('id');
        $builder->string('name')->length(100);
        $builder->string('slug')->length(100);
        $builder->string('location')->length(100);//TODO change with geographic points
        $builder->text('description');
        $builder->embed(TimePeriod::class);
        $builder->hasMany(Ticket::class)
                ->mappedBy('event')
                ->cascadePersist();
        $builder->string('eventType')->columnName('type');
        $builder->string('imageURL')->length(100)->columnName('image_url');
    }
}