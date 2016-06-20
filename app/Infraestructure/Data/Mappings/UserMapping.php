<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\User\User;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class UserMapping extends EntityMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return User::class;
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
        $builder->string('email')->unique();
        $builder->string('password')->length(60);
        $builder->rememberToken();
    }
}