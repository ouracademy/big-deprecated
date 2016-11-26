<?php namespace App\Domain\Event;

use App\Domain\Support\DomainObject;

class InformationRequest
{
    use DomainObject;
    private $firstname;
    private $lastname;
    private $email;
    private $cellphone;
    private $message;
    private $event;

    public function __construct($firstname,$lastname,$email,$cellphone,Event $event){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email= $email;
        $this->cellphone = $cellphone;
        $this->event = $event;
    }
    
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastName() {
        return $this->lastName;
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getCellphone() {
        return $this->cellphone;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
    
    public function getEvent($event) {
        return $this->event;
    }
}