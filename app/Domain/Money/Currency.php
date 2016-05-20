<?php

namespace App\Domain\Money;
use App\Domain\Support\NamedObject;

class Currency extends NamedObject
{
    private $code, $name, $symbol;
    
    public function __construct($code, $name, $symbol){
        parent::__construct($name);
        $this->code = $code;
        $this->symbol = $symbol;
    }
    
    public static function getBuilder($code){
        return new CurrencyBuilder($code);
    }
    
    public function getCode(){
       return $this->code; 
    }
    
    public function getSymbol(){
        return $this->symbol;
    }
}