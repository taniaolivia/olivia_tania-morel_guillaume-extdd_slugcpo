<?php
namespace App\Repository;
use App\Domain\AnnuaireDeCinemas;
class Annuaire implements AnnuaireDeCinemas
{
    public function tousLesCinemas(): iterable
    {
        return [];
    }
}