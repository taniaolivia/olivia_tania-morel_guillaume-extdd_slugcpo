<?php
namespace App\Domain\Query;
use App\Domain\CatalogueDeFilms;

class UnFilmHandler
{
    private $catalogue;

    public function __construct(CatalogueDeFilms $catalogueDeFilms)
    {
        $this->catalogue = $catalogueDeFilms;
    }

    public function handle(UnFilmQuery $requete): iterable
    {
        return $this->catalogue->getUnFilm();
    }
}