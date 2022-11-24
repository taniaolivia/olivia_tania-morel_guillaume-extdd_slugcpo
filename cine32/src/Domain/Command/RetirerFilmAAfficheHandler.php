<?php
namespace App\Domain\Command;
use App\Domain\ProgrammeDeCinema;
use App\Domain\CatalogueDeFilms;
use App\Domain\Query\UnFilmQuery;

class RetirerFilmAAfficheHandler
{
    private $programme;

    public function __construct(ProgrammeDeCinema $programmeDeCinema)
    {
        $this->programme = $programmeDeCinema;
    }

    public function handle(RetirerFilmAAfficheCommand $command):iterable
    {
        return ($this->programme)->retirerFilmAAffiche($command->getFilm());
    }
}