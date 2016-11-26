<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\Event\RegisterInformationRequest;
use Validator;

class RegisterInformationRequestController extends Controller
{
    private $service;
    
    public function __construct(RegisterInformationRequest $service){
        $this->service = $service;
    }
    
    public function index($eventId, Request $request){
        // TODO: use laravel validator...need to move to laravel 5.3
        $validator = Validator::make($request->all(), [
            'firstname'=>'required|max:50',
            'lastname'=>'required|max:50',
            'email'=>'required|email|max:50',
            'cellphone'=>'required|digits:9',
            'message'=>'max:200'
        ]); // TODO: add eventId...should be numeric

        if ($validator->fails()) {
            return response()->json([
                    'error' =>  $validator->errors()
                ], 422);
        }

        $this->service->execute([
            'eventId' => intval($eventId),
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'cellphone'=>$request->cellphone,
            'message'=>$request->message
        ]);

        return response()->json([
            'data' => [
                'message' => 'OK'
            ]
        ]);
    }
}
