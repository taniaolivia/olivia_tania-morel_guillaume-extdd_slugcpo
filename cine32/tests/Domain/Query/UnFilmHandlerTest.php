<?php
namespace App\Domain\Query;
use App\Domain\Film;
use App\Domain\CatalogueDeFilms;
use App\Domain\Query\UnFilmHandler;
use App\Domain\Query\UnFilmQuery;
use PHPUnit\Framework\TestCase;

class UnFilmHandlerTest extends TestCase
{
    public function test_details_un_film()
    {
        // Arrange
        $film = $this->createMock(Film::class);
        $query = new UnFilmQuery($film);
        $catalogue = $this->createMock(CatalogueDeFilms::class);

        // Assert (préparation)
        $catalogue->expects($this->once())->method("getUnFilm");

        //Arrange
        $handler = new UnFilmHandler($catalogue);

        //Act
        $resultat = $handler->handle($query);

        //Assert
        $this->assertIsIterable($resultat);
    }
}