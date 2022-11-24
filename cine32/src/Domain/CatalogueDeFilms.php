<?php
namespace App\Domain;

interface CatalogueDeFilms
{
    public function getTousLesFilms():iterable;

    public function getUnFilm():iterable;
}