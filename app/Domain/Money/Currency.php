<?php

namespace App\Domain\Money;
use App\Domain\Support\NamedObject;

class Currency extends NamedObject
{
    private $code, $symbol;
    
    public function __construct(CurrencyBuilder $builder){
        parent::__construct($builder->getName());
        $this->code = $builder->getCode();
        $this->symbol = $builder->getSymbol();
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