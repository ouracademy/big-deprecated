<?php

use App\Domain\Party\Person;

class PersonTest extends TestCase
{
    private $arthur;
    
    public function setUp()
    {
        $this->arthur = new Person('arthur');
    }
    
    public function testName(){
        $this->assertEquals('arthur', $this->arthur->getName());
    }
    
    public function testEmail(){
        $this->arthur->setEmail('amd11dot4@gmail.com');
        $this->assertEquals('amd11dot4@gmail.com', $this->arthur->getEmail());
    }
}
