<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterParticipantRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'=>'required|max:50',
            'lastname'=>'required|max:50',
            'email'=>'required|email|max:50',
            'cellphone'=>'required|digits:9',
            'message'=>'max:200'
        ];
    }
}
