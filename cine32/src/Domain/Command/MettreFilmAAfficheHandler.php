<?php
namespace App\Domain\Command;
use App\Domain\ProgrammeDeCinema;
use App\Domain\CatalogueDeFilms;
use App\Domain\Query\UnFilmQuery;

class MettreFilmAAfficheHandler
{
    private $programme;

    public function __construct(ProgrammeDeCinema $programmeDeCinema)
    {
        $this->programme = $programmeDeCinema;
    }

    public function handle(MettreFilmAAfficheCommand $command):iterable
    {
        return ($this->programme)->mettreFilmAAffiche($command->getFilm());
    }
}