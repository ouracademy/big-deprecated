<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Event\Event;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

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
        $builder->string('name');
        $builder->string('slug');
        $builder->string('location');
        $builder->text('description');
        $builder->string('eventType')->columnName('type');
    }
}