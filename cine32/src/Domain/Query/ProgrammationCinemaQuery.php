<?php
namespace App\Domain\Query;
use App\Domain\Cinema;

class ProgrammationCinemaQuery
{
    private $cinema; 
    
    public function __construct(Cinema $cinema)
    { 
        $this->cinema = $cinema; 
    }
}