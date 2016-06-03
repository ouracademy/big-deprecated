<?php namespace App\Domain\User;

use App\Domain\Support\NamedObject;

class User extends NamedObject
{
    protected $id;
    protected $email;
    protected $password;
    protected $rememberToken;
    
    public function __construct($name, $password, $email){
        parent::__construct($name);
        $this->password = $password;
        $this->email = $email;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
}