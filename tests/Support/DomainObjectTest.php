<?php

use App\Domain\Support\DomainObject;

class DomainObjectTest extends TestCase
{
    private $domainObject;
    
    public function setUp(){
        $this->domainObject= new SomeDomainObject(1);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetInvalidId(){
        $this->domainObject->setId(null);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testCreateInvalidDomainObject()
    {
        new SomeDomainObject(null);
    }
    
    public function testId(){
        $this->assertEquals($this->domainObject->getId(),1);
        $this->domainObject->setId(4);
        $this->assertEquals($this->domainObject->getId(),4);
    }
}

class SomeDomainObject{
    use DomainObject;
}