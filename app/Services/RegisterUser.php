<?php namespace App\Services;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class RegisterUser
{
    private $fields = ['firstName', 'email', 'password'];
    private $data;
    private $userRepository;
    
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    
    public function __call($name, $arguments)
    {
        assert(in_array($name, $this->fields));
        assert(count($arguments) == 1);
        
        $this->data[$name] = $arguments[0];
        return $this;
    }
    
    public function execute(){
        $user = new User($this->data['firstName'],
                         bcrypt($this->data['password']),
                         $this->data['email']);
        $this->userRepository->add($user);
        return $user;
    }
}