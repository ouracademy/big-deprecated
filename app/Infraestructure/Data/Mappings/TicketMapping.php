<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Event\Ticket;
use App\Domain\Event\Event;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class TicketMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Ticket::class;
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
        $builder->field('money', 'price');
        $builder->integer('totalQuantity')->unsigned();
        $builder->integer('quantityAvailable')->unsigned();
        $builder->manyToOne(Event::class);
        $builder->unique(['event_id', 'name']);
    }
}