<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function getContact(){
        return view('contact');
    }
    
    public function postContact(Request $request){
        
        dd($request->all());
    }
}
