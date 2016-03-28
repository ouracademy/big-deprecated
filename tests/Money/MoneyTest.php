<?php

use App\Money\Money;
use App\Money\Currency;

class MoneyTest extends TestCase
{
    private $someMoney;
    
    public function setUp(){
        $this->someMoney = new Money(50,Currency::SOLES());
    }
    
    public function testAmount(){
        $this->assertEquals($this->someMoney->getAmount(), 50);
    }
    
    public function testCurrency(){
        $this->assertEquals($this->someMoney->getCurrency(),Currency::SOLES());
    }
}
