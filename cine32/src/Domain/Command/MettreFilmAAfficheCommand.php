<?php
namespace App\Domain\Command;
use App\Domain\Film;
use App\Domain\Cinema;

class MettreFilmAAfficheCommand
{
    private $film;
    private $cinema;

    public function __construct(Film $film, Cinema $cinema)
    {
        $this->film = $film;
        $this->cinema = $cinema;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }
}
