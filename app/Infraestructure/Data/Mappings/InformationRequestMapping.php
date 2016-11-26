<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Event\InformationRequest;
use App\Domain\Event\Event;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class InformationRequestMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return InformationRequest::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        $builder->increments('id');
        $builder->string('firstname')->length(50);
        $builder->string('lastname')->length(50);
        $builder->string('email')->length(50);
        $builder->string('cellphone')->length(9)->fixed(true);
        $builder->text('message')->nullable();
        $builder->manyToOne(Event::class);
    }
}