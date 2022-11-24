<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CinemaAdminControllerTest extends WebTestCase
{
    public function test_page_cinemas_est_disponible()
    {
        $client = static::createClient();
        $client->request('GET', '/admin/cinemas');
        $this->assertSelectorExists('html ul.listeCinemas');
    }
}