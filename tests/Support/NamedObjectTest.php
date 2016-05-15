<?php

use App\Domain\Support\NamedObject;

class NamedObjectTest extends TestCase
{
    private $namedObject;
    
    public function setUp(){
        $this->namedObject= new NamedObject("Some named object");
    }
    
    public function testName(){
        $this->assertEquals($this->namedObject->getName(),"Some named object");
    }
    
    public function testToString(){
        $this->assertEquals((string)$this->namedObject,"Some named object");
    }
}