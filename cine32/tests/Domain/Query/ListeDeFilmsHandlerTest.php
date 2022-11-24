<?php
namespace App\Domain\Query;
use App\Domain\CatalogueDeFilms;
use App\Domain\Query\ListeDeFilmsHandler;
use App\Domain\Query\ListeDeFilmsQuery;
use PHPUnit\Framework\TestCase;

class ListeDeFilmsHandlerTest extends TestCase
{
    public function test_obtenir_la_liste_de_films_interroge_le_catalogue()
    {
        //Arrange
        $requete=new ListeDeFilmsQuery();
        $catalogue = $this->createMock(CatalogueDeFilms::class);
        $handler=new ListeDeFilmsHandler($catalogue);

        //Assert
        $catalogue->expects($this->once())->method("getTousLesFilms");

        // Act
        $listeDeFilms = $handler->handle($requete);

    }
}
