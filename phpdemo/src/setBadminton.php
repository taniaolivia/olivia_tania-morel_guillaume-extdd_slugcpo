<?php


namespace App;


class setBadminton
{
    private $pointsJoueur1;
    private $pointsJoueur2;

    public function setBadminton()
    {
        $this->pointsJoueur1 = 0;
        $this->pointsJoueur2 = 0;
    }

    public function pointGagneJ1()
    {
        $this->pointsJoueur1++;
    }

    public function pointGagneJ2()
    {
        $this->pointsJoueur2++;
    }

    public function afficherGagnantSet()
    {
        $return ;
        if($this->pointsJoueur1 < $this->pointsJoueur2)
        {
            $return = "joueur1 gagne";
        }
        else
        {
            $return = "joueur2 gagne";
        }
        return $return;
    }

    public function gagnantSet()
    {
        $estGagne = "aucun joueur ne gagne" ;

        if(($this->pointsJoueur1 == 15) and ($this->pointsJoueur2 < 14))
        {
            $estGagne = "joueur1 gagne";
        }
        if(($this->pointsJoueur2 == 15) and ($this->pointsJoueur1 < 14))
        {
            $estGagne = "joueur2 gagne";
        }
        if(($this->pointsJoueur1 > 15) and ($this->pointsJoueur1-$this->pointsJoueur2 > 2))
        {
            $estGagne = "joueur1 gagne";
        }
        if(($this->pointsJoueur2 > 15) and ($this->pointsJoueur2-$this->pointsJoueur1 > 2))
        {
            $estGagne = "joueur2 gagne";
        }
        if(($this->pointsJoueur1 == 20) or ($this->pointsJoueur2 == 20))
        {
            if($this->pointsJoueur1 > $this->pointsJoueur2)
            {
                $estGagne = "joueur1 gagne";
            }
            else
            {
                $estGagne = "joueur2 gagne";
            }
        }

        return $estGagne ;
    }

    public function getPointsJ1()
    {
        return $this->pointsJoueur1;
    }

    public function getPointsJ2()
    {
        return $this->pointsJoueur2;
    }

    public function setPointsJ1($points)
    {
        $this->pointsJoueur1 = $points;
    }

    public function setPointsJ2($points)
    {
        $this->pointsJoueur2 = $points;
    }
};