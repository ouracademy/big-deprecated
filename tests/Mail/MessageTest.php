<?php

class MessageTest extends TestCase
{
    private $message;
    
    public function setUp(){
        $this->message = new Message();
    }
    
    public function testFrom(){
        $this->message->setFrom('amd11dot4@gmail.com');
        $this->assertEquals($this->message->getFrom(), 'amd11dot4@gmail.com');
    }
    
    public function testTo(){
        $this->message->set('amd11dot4@gmail.com');
        $this->assertEquals($this->message->getFrom(), 'amd11dot4@gmail.com');
    }
    
    public function testCC(){
    }
    
    public function testSubject(){
    }
    
    public function testSend(){
        
        $this->message->send();
    }
}
