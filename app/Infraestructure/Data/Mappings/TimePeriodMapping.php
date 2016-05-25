<?php
namespace App\Infraestructure\Data\Mappings;

use App\Domain\Time\TimePeriod;
use LaravelDoctrine\Fluent\EmbeddableMapping;
use LaravelDoctrine\Fluent\Fluent;

class TimePeriodMapping extends EmbeddableMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return TimePeriod::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent $builder
     */
    public function map(Fluent $builder)
    {
        $builder->dateTime('start');
        $builder->dateTime('end');
    }
}