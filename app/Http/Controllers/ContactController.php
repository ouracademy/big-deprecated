<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\Contact\EmailContactService;
use App\Domain\Party\Organization;
use App\Domain\Party\Person;

class ContactController extends Controller
{
    private $contactService, $BIG;
    
    public function __construct(EmailContactService $contactService){
        $this->contactService = $contactService;
        
        $this->BIG = new Organization('BIG');
        $this->BIG->setEmail('info@businessideasgroup.com.pe');
        $this->BIG->setLocation('Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)');
    }
    
    public function getContact(){
        return view('contact')->with('BIG',$this->BIG);
    }
    
    public function postContact(Request $request){
        $person = new Person($request->name);
        $person->setEmail($request->email);
        $this->contactService->contact($person, $this->BIG, $request->message);
        return back()->withStatus('Mensaje enviado!, estaremos respondiendole lo más pronto posible');
    }
}
