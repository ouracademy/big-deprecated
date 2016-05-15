<?php namespace App\Domain\Support;

use SplObjectStorage;

class Set{
    private $objects;
    
    public function __construct(){
        //We use SplObjectStorage because is faster than arrays
        //and contained objects don't necessary need to have getId() method
        $this->objects = new SplObjectStorage();
    }
    
    public function all(){
        return $this->objects;
    }
    
    public function add($object){
        $this->objects[$object] = $object;
    }
    
    public function contains($object){
        return $this->objects->contains($object);    
    }
}
