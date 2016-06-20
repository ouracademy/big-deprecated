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
    
    public function testTotalQuantity(){
        $this->assertEquals($this->ticket->getTotalQuantity(), 10);
    }
    
    public function testQuantityAvailable(){
        $this->assertEquals($this->ticket->getQuantityAvailable(), 10);
    }
    
    public function testSellTickets(){
        $this->ticket->sell(4);
        $this->assertEquals($this->ticket->getQuantityAvailable(), 6);
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testSellMoreTicketsThanAvailable(){
        $this->ticket->sell(20);
    }
}