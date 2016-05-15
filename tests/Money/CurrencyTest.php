<?php

use App\Domain\Money\Currency;

class CurrencyTest extends TestCase
{
    private $soles;
    
    public function setUp(){
        $this->soles = new Currency("Soles", "s/");
    }
    
    public function testName(){
        $this->assertEquals($this->soles->getName(),"Soles");
    }
    
    public function testSymbol(){
        $this->assertEquals($this->soles->getSymbol(),"s/");
    }
    
    public function testFactoryMethod(){
        $this->assertEquals($this->soles, Currency::SOLES());
    }
}
