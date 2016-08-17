<?php namespace App\Services\Contact;

use App\Domain\Party\Party;
use Mail;

class EmailContactService
{
    public function contact(Party $from,Party $to, $message){
        //TODO: for now do nothing
        // Mail::send('emails.contact', ['to' => $to, 'from' => $from,'content' => $message], 
        //     function ($message) use ($from, $to) {
        //         $message->from($from->getEmail(), $from->getName());
        //         $message->to($to->getEmail(), $to->getName())
        //                 ->subject('Mensaje de contáctenos');
        //     });
    }
}