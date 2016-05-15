<?php namespace App\Domain\Time;

interface TimeReference
{
    public function format ($format);
}