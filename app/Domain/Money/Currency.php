<?php

namespace App\Domain\Money;
use App\Domain\Support\NamedObject;

class Currency extends NamedObject
{
    public static $CURRENCIES;
    private $symbol;
    
    public function __construct($name, $symbol){
        parent::__construct($name);
        $this->symbol = $symbol;
    }
    
    //Used to don't access Currency::$CURRENCIES['SOLES']
    public static function __callStatic($name, $arguments)
    {
        return self::$CURRENCIES[$name];
    }
    
    public function getSymbol(){
        return $this->symbol;
    }
}

Currency::$CURRENCIES = array(
    'SOLES' => new Currency('Soles', 's/'),
    'DOLLARS' => new Currency('Dollars', '$')
);