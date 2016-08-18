<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\Contact\EmailContactService;
use App\Domain\Party\Organization;
use App\Domain\Party\Person;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    private $contactService, $BIG;
    
    public function __construct(EmailContactService $contactService){
        $this->contactService = $contactService;
        
        $this->BIG = new Organization('BIG');
        $this->BIG->setEmail('info@businessideasgroup.com.pe');
        $this->BIG->setLocation('Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)');
    }
    
    public function postContact(ContactFormRequest $request){
        $person = new Person($request->get('from.name'));
        $person->setEmail($request->get('from.email'));
        $this->contactService->contact($person, $this->BIG, $request->message);
        
        return response()->json([
            'data' => 'Message sended!'
        ]);
    
    }
}
