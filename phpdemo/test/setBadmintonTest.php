<?php

namespace App;

class setBadmintonTest extends \PHPUnit\Framework\TestCase
{
    public function test_set_commence_avecscore_0_0()
    {
        $set = new setBadminton();
        $pointsJoueur1 = $set->getPointsJ1();
        $pointsJoueur2 = $set->getPointsJ2();
        $this->assertEquals(0,$pointsJoueur1);
        $this->assertEquals(0,$pointsJoueur2);
    }

    public function test_joueur1_gagnepremierpoint_scorecourantjoueur1_1()
    {
        $set = new setBadminton();
        $set->pointGagneJ1();
        $pointsJoueur1 = $set->getPointsJ1();
        $pointsJoueur2 = $set->getPointsJ2();
        $this->assertEquals(1,$pointsJoueur1);
        $this->assertEquals(0,$pointsJoueur2);
    }

    public function test_joueur2_gagnedeuxiemepoint_scorescourantjoueurs_1_1()
    {
        $set = new setBadminton();
        $set->pointGagneJ1();
        $set->pointGagneJ2();
        $pointsJoueur1 = $set->getPointsJ1();
        $pointsJoueur2 = $set->getPointsJ2();
        $this->assertEquals(1,$pointsJoueur1);
        $this->assertEquals(1,$pointsJoueur2);
    }

    public function test_joueur1_14_Joueur2_12_joueur1gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(14);
        $set->setPointsJ2(12);
        $set->pointGagneJ1();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur1 gagne",$nomGagnant);
    }

    public function test_joueur1_12_Joueur2_14_joueur2gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(12);
        $set->setPointsJ2(14);
        $set->pointGagneJ2();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur2 gagne",$nomGagnant);
    }

    public function test_joueur1_14_Joueur2_14_joueur1gagnepoint_personnegagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(14);
        $set->setPointsJ2(14);
        $set->pointGagneJ1();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("aucun joueur ne gagne",$nomGagnant);
    }

    public function test_joueur1_14_Joueur2_14_joueur2gagnepoint_personnegagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(14);
        $set->setPointsJ2(14);
        $set->pointGagneJ2();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("aucun joueur ne gagne",$nomGagnant);
    }

    public function test_joueur1_18_Joueur2_16_joueur1gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(18);
        $set->setPointsJ2(16);
        $set->pointGagneJ1();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur1 gagne",$nomGagnant);
    }

    public function test_joueur1_16_Joueur2_18_joueur2gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(16);
        $set->setPointsJ2(18);
        $set->pointGagneJ2();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur2 gagne",$nomGagnant);
    }

    public function test_joueur1_18_Joueur2_17_joueur1gagnepoint_personnegagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(18);
        $set->setPointsJ2(17);
        $set->pointGagneJ1();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("aucun joueur ne gagne",$nomGagnant);
    }

    public function test_joueur1_17_Joueur2_18_joueur2gagnepoint_personnegagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(17);
        $set->setPointsJ2(18);
        $set->pointGagneJ2();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("aucun joueur ne gagne",$nomGagnant);
    }

    public function test_joueur1_19_Joueur2_19_joueur1gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(19);
        $set->setPointsJ2(19);
        $set->pointGagneJ1();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur1 gagne",$nomGagnant);
    }

    public function test_joueur1_19_Joueur2_19_joueur2gagnepoint_gagneset()
    {
        $set = new setBadminton();
        $set->setPointsJ1(19);
        $set->setPointsJ2(19);
        $set->pointGagneJ2();
        $nomGagnant = $set->gagnantSet();
        $this->assertEquals("joueur2 gagne",$nomGagnant);
    }
}