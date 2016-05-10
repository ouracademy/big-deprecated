<?php

use App\Services\Contact\EmailContactService;
use App\Domain\Party\Organization;
use App\Domain\Party\Person;

class EmailContactTest extends TestCase
{
    public function testContact()
    {
        $big = new Organization('BIG');
        $big->setEmail('info@businessideasgroup.com.pe');
        $somePerson = new Person('Some Person');
        $somePerson->setEmail('someEmail@gmail.com');
        $message = 'Un mensaje para BIG';
        
        $contactService = new EmailContactService;
        $contactService->contact($somePerson, $big, $message);
    }
}
