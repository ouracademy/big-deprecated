<?php namespace App\Domain\Party;

use App\Support\NamedObject;
use App\Domain\Event\EventRole;
use SplObjectStorage;

class Party extends NamedObject
{
    private $email;
    private $eventRoles;
    
    public function __construct($name){
        parent::__construct($name);
        $this->eventRoles = new SplObjectStorage();
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    
    function friendAddEventRole(EventRole $eventRole){
        $this->eventRoles->attach($eventRole);
    }
}