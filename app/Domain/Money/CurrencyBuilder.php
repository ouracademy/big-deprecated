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
    
    public function build(){
        return new Currency($this->code, $this->name, $this->symbol);
    }
}