<?php namespace App\Domain\Event;

class ContactFacade
{
    private $name, $email, $message;
    
    public function __construct($name, $email, $message){
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }
    
    public function send(){
        Mail::send('emails.contact', [$name, $email, $message], function ($message) use ($data) {
          $message->subject('BIG Formulario de contacto'.$name)
                  ->to();
        });
    }
}