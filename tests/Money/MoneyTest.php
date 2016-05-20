<?php

use App\Domain\Money\Money;
use App\Domain\Money\Currencies;

class MoneyTest extends TestCase
{
    private $someMoney;
    
    public function setUp(){
        $this->someMoney = new Money(50,Currencies::SOL());
    }
    
    public function testAmount(){
        $this->assertEquals($this->someMoney->getAmount(), 50);
    }
    
    public function testCurrency(){
        $this->assertEquals($this->someMoney->getCurrency(),Currencies::SOL());
    }
}
