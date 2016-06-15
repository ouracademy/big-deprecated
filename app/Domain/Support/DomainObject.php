<?php namespace App\Domain\Support;

use InvalidArgumentException;

trait DomainObject
{
    protected $id;
    
    public function __construct($id) {
        $this->setId($id);
    }
    
    public function setId($id){
        $this->assertValidId($id);
        $this->id = $id;
    }
    
    private function assertValidId($id){
        if($id==null){
            throw new InvalidArgumentException("Cannot set a null ID failed");
        }
    }
    
    public function getId(){
        return $this->id;
    }
}