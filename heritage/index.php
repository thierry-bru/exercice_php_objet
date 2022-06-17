<?php
require_once 'Hero.php';
require_once 'SuperVilain.php';
$gentil = new Hero("Wayne", "Bruce","Batman");
$vilain = new SuperVilain("Rapier","Jack","Le Joker","A tué plein de gens");

var_dump($gentil);
//echo $gentil->afficherIdentite();
var_dump($vilain);
//echo $vilain->afficherIdentite();
echo $vilain->afficher();