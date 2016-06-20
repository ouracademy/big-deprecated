<?php namespace App\Domain\Event;

use App\Domain\Support\NamedObject;
use App\Domain\Support\DomainObject;
use App\Domain\Money\Money;
use InvalidArgumentException;

class Ticket
{
    use NamedObject, DomainObject;
    
    private $price;
    private $totalQuantity;
    private $quantityAvailable;
    private $event;
    
    public function __construct($name, Money $price, $totalQuantity){
        $this->name = $name;
        $this->price = $price;
        $this->totalQuantity = $totalQuantity;
        $this->quantityAvailable = $totalQuantity;
    }
    
    function friendAddEvent(Event $event){
        $this->event = $event;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getTotalQuantity(){
        return $this->totalQuantity;
    }
    
    public function getQuantityAvailable(){
        return $this->quantityAvailable;
    }
    
    public function sell($quantity){
        if($this->quantityAvailable >= $quantity)
            $this->quantityAvailable = $this->quantityAvailable - $quantity;
        else 
            throw new InvalidArgumentException("Quantity available is lower ".
                                                "than quantity to sell");
    }
}