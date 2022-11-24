<?php
namespace App\Domain\Query;
use App\Domain\CatalogueDeFilms;

class ListeDeFilmsHandler
{
    private $catalogue;

    public function __construct(CatalogueDeFilms $catalogueDeFilms)
    {
        $this->catalogue = $catalogueDeFilms;
    }

    public function handle(ListeDeFilmsQuery $requete): iterable
    {
        return $this->catalogue->getTousLesFilms();
    }
}