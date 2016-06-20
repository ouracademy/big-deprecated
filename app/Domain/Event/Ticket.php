<?php namespace App\Domain\Event;

use App\Domain\Support\NamedObject;
use App\Domain\Money\Money;

class Ticket
{
    use NamedObject;
    
    private $price;
    private $quantity;
    
    public function __construct($name, Money $price, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getQuantity(){
        return $this->quantity;
    }
}