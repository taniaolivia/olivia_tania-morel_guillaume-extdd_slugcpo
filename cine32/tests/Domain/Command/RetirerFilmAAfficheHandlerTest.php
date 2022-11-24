<?php
namespace App\Domain\Command;
use App\Domain\Cinema;
use App\Domain\Command\RetirerFilmAAfficheCommand;
use App\Domain\Command\RetirerFilmAAfficheHandler;
use App\Domain\Film;
use App\Domain\ProgrammeDeCinema;
use PHPUnit\Framework\TestCase;

class RetirerFilmAAfficheHandlerTest extends TestCase
{
    public function test_retirer_un_film_a_affiche_sollicite_le_programme()
    {
        // Arrange
        $film = $this->createMock(Film::class);
        $cinema = $this->createMock(Cinema::class);
        $programme = $this->createMock(ProgrammeDeCinema::class);
        $handler = new RetirerFilmAAfficheHandler($programme);
        $command = new RetirerFilmAAfficheCommand($film,$cinema);

        // Assert
        $programme->expects($this->once())->method("retirerFilmAAffiche");

        // Act
        $handler->handle($command);
    }
}