<?php

use App\Domain\Event\Ticket;
use App\Domain\Money\Money;
use App\Domain\Money\Currencies;

class TicketTest extends TestCase
{
    public function setUp(){
        $this->ticket = new Ticket('VIP', new Money(50, Currencies::SOL()), 10);
    }
    
    public function testName(){
        $this->assertEquals($this->ticket->getName(),'VIP');
    }
    
    public function testPrice(){
        $this->assertEquals($this->ticket->getPrice(), new Money(50, Currencies::SOL()));
    }
    
    public function testQuantity(){
        $this->assertEquals($this->ticket->getQuantity(), 10);
    }
}