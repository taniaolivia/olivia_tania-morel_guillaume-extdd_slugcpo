<?php
namespace App\Domain\Query;
use App\Domain\Film;

class UnFilmQuery
{
    private $film; 
    
    public function __construct(Film $film)
    { 
        $this->film = $film; 
    }
}