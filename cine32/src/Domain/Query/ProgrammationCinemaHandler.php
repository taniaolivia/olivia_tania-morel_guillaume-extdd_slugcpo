<?php
namespace App\Domain\Query;
use App\Domain\ProgrammeDeCinema;

class ProgrammationCinemaHandler
{
    private $programme;

    public function __construct(ProgrammeDeCinema $programmeDeCinema)
    {
        $this->programme = $programmeDeCinema;
    }

    public function handle(ProgrammationCinemaQuery $requete): iterable
    {
        return $this->programme->getFilmsPourCinema();
    }
}