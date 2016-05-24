<?php

namespace App\Domain\Money;
class CurrencyBuilder {
    private $code, $name, $symbol;
    
    function __construct($code){
        $this->code = $code;
    }
    
    public function name($name){
        $this->name = $name;
        return $this;
    }
    
    public function symbol($symbol){
        $this->symbol = $symbol;
        return $this;
    }
    
    public function getCode(){
        return $this->code;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getSymbol(){
        return $this->symbol;
    }
    
    public function build(){
        return new Currency($this);
    }
}