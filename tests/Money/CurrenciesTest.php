<?php

use App\Domain\Money\Currency;
use App\Domain\Money\Currencies;

class CurrenciesTest extends TestCase
{
    private $sol;
    
    public function setUp(){
        $this->sol = Currency::getBuilder('PEN')->name('Sol')->symbol('s/')->build();
    }
    
    public function testGetFromCode(){
        $this->assertEquals(Currencies::getFromCode('PEN'), $this->sol);
    }
    
    public function testGetFromCurrencyName(){
        $this->assertEquals(Currencies::getFromCurrencyName("Sol"),$this->sol);
        $this->assertEquals(Currencies::getFromCurrencyName("SOL"),$this->sol);
        $this->assertEquals(Currencies::getFromCurrencyName("SoL"),$this->sol);
    }
    
    public function testCallStatic(){
        $this->assertEquals(Currencies::sol(),$this->sol);
        $this->assertEquals(Currencies::SOL(),$this->sol);
        $this->assertEquals(Currencies::SoL(),$this->sol);
    }
}
