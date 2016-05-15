<?php namespace App\Domain\Event;

use App\Domain\Support\NamedObject;

class EventRoleType extends NamedObject{
    public static $EVENT_ROLE_TYPES;
    
    //Used to don't access EventRole::$EVENT_ROLE_TYPES
    public static function __callStatic($name, $arguments)
    {
        return self::$EVENT_ROLE_TYPES[$name];
    }
}

EventRoleType::$EVENT_ROLE_TYPES = array(
    'EXPOSITOR' => new EventRoleType('Expositor'),
    'ORGANIZER' => new EventRoleType('Organizer')
);