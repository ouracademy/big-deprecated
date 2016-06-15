<?php namespace App\Domain\Support;

trait DomainObject
{
    protected $id;
    
    public function setId($id){
        assert($id != null, "Cannot set a null ID");
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }
}