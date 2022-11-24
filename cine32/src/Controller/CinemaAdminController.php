<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CinemaAdminController extends AbstractController
{
    /**
     * @Route("/admin/cinemas", name="cinema_admin")
     */
    public function index(ListeCinemasHandler $handler)
    {
        $listeCinemas = $handler->handle(new ListeCinemasQuery());
        return $this->render('cinema_admin/index.html.twig', [
            'cinemas' => $listeCinemas,
        ]);
    }
}
