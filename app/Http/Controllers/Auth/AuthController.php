<?php

namespace App\Http\Controllers\Auth;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    protected $userRepository;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->userRepository = $userRepository;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:'.User::class,
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = $register->firstName($data['name'])
                         ->lastName($data['lastName'])
                         ->email($data['email'])
                         ->password($data['password'])
                         ->execute();
        return $user;
        
        /*$user = new User($data['name']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);
        
        return $this->userRepository->add($user);*/
    }
}
