<?php namespace App\Domain\User;

use App\Domain\Support\NamedObject;
use App\Domain\Support\DomainObject;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User implements Authenticatable, CanResetPasswordContract
{
    use NamedObject, DomainObject, CanResetPassword;
    
    protected $email;
    protected $password;
    protected $rememberToken;
    
    public function __construct($name, $password, $email){
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
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
    
    
    //TODO TEST THIS...
    public function setPassword($password){
        $this->password = $password;
    }
    
    
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName(){
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier(){
        $name = $this->getAuthIdentifierName();

        return $this->{$name};
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword(){
        return $this->getPassword();
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken(){
        return $this->rememberToken;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value){
        $this->rememberToken = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName(){
        return "rememberToken";
    }
}