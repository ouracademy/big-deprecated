<?php namespace App\Domain\Party;

use App\Domain\Support\NamedObject;
use App\Domain\Support\DomainObject;
use App\Domain\Event\EventRole;
use SplObjectStorage;

abstract class Party
{
    use NamedObject, DomainObject;
    
    protected $email, $location;
    protected $eventRoles;
    
    public function __construct($name){
        $this->name = $name;
        $this->eventRoles = new SplObjectStorage();
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setLocation($location){
        $this->location = $location;
    }
    
    public function getLocation(){
        return $this->location;
    }
    
    function friendAddEventRole(EventRole $eventRole){
        $this->eventRoles->attach($eventRole);
    }
}