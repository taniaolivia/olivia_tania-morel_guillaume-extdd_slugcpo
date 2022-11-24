<?php
namespace App\Domain;

interface ProgrammeDeCinema
{
    public function getFilmsPourCinema():iterable;

    public function mettreFilmAAffiche():iterable;

    public function retirerFilmAAffiche():iterable;
}