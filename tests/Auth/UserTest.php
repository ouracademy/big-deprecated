<?php

use App\Domain\User\User;

class UserTest extends TestCase
{
    public function setUp(){
        $this->user= new User('jplace','password','amd11dot4@gmail.com');
    }
    
    public function testId(){
        $this->assertEmpty($this->user->getId());
    }
    
    public function testName(){
        $this->assertEquals($this->user->getName(),'jplace');
    }
    
    public function testPassword(){
        $this->assertEquals($this->user->getPassword(),'password');
    }
    
    public function testEmail(){
        $this->assertEquals($this->user->getEmail(),'amd11dot4@gmail.com');
        $this->user->setEmail('this.arthur.email@gmail.com');
        $this->assertEquals($this->user->getEmail(),'this.arthur.email@gmail.com');
    }
}