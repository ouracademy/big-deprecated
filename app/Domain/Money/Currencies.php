<?php

namespace App\Domain\Money;

class Currencies
{
    public static $CURRENCIES;
    
    public static function __callStatic($name, $arguments)
    {
        return self::getFromCurrencyName($name);
    }
    
    public static function getFromCode($currencyCode){
        return self::$CURRENCIES[$currencyCode];
    }
    
    public static function getFromCurrencyName($name){
        foreach(self::$CURRENCIES as $currencyCode => $currency){
            if(strcasecmp($currency->getName(), $name) == 0){
                return $currency;
            }
        }
        
        return self::$CURRENCIES['NULL'];
    }
}

Currencies::$CURRENCIES = array(
    'PEN' => Currency::getBuilder('PEN')->name('Sol')->symbol('s/')->build(),
    'NULL'=> Currency::getBuilder('NULL')->name('null')->build()
);