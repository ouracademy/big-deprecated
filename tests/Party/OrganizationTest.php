<?php

use App\Domain\Party\Organization;

class OrganizationTest extends TestCase
{
    private $BIG;
    
    public function setUp()
    {
        $this->BIG = new Organization('BIG');
    }
    
    public function testName(){
        $this->assertEquals('BIG', $this->BIG->getName());
    }
    
    public function testEmail(){
        $this->BIG->setEmail('informes@businessideasgroup.com.pe');
        $this->assertEquals('informes@businessideasgroup.com.pe', $this->BIG->getEmail());
    }
}
