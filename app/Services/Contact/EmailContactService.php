<?php namespace App\Services\Contact;

use App\Domain\Party\Party;
use Mail;

class EmailContactService
{
    public function contact(Party $from,Party $to, $message){
        Mail::send('emails.contact', ['to' => $to, 'from' => $from,'content' => $message], 
            function ($message) use ($from, $to) {
                $message->to($to->getEmail(), $to->getName())
                        ->subject('Mensaje de contáctenos');
            });
    }
}