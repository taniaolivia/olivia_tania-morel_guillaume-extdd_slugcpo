<?php
namespace App\Domain;
use PHPUnit\Framework\TestCase;

class CinemaTest extends TestCase
{
    public function test_un_cinema_expose_son_nom()
    {
        $cinema = new Cinema();
        $this->assertEquals("Le Lafayette", $cinema->getNom());
    }

    public function test_un_cinema_expose_son_adresse()
    {
        $cinema = new Cinema();
        $this->assertEquals("Avenue Henri Becquerel", $cinema->getAdresse());
    }

    public function test_un_cinema_expose_sa_description()
    {
        $cinema = new Cinema();
        $this->assertEquals("Cinéma à La Rochelle", $cinema->getDescription());
    }
}