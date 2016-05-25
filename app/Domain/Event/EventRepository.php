<?php namespace App\Domain\Event;

interface EventRepository
{   
    public function all();
    
    public function add(Event $group);
}