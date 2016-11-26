<?php namespace App\Domain\Event;

interface InformationRequestRepository
{   
    public function add(InformationRequest $informationRequest);
}