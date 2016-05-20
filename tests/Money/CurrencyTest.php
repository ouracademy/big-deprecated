<?php

use App\Domain\Money\Currency;
use App\Domain\Money\Currencies;

class CurrencyTest extends TestCase
{
    private $soles;
    
    public function setUp(){
        $this->soles = Currencies::getFromCode('PEN');//Sol peruano or use Currencies::SOL()
    }
    
    public function testCode(){
        $this->assertEquals($this->soles->getCode(),"PEN");
    }
    
    public function testName(){
        $this->assertEquals($this->soles->getName(),"Sol");
    }
    
    public function testSymbol(){
        $this->assertEquals($this->soles->getSymbol(),"s/");
    }
}
