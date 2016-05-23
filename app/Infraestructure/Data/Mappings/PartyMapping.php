<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Party\Party;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class PartyMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return Party::class;
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
        $builder->string('email');
        $builder->string('location');
        $builder->joinedTableInheritance()->column('type');
    }
}