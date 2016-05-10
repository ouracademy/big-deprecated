<?php namespace App\Support;

class NamedObject
{
    private $name;
    
    public function __construct($name = 'no name'){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function __toString(){
        return $this->name;
    }
}