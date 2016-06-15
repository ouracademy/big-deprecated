<?php namespace App\Domain\Support;

trait NamedObject
{
    protected $name;
    
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