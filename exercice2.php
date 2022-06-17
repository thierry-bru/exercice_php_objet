<?php
/**
 * Écrivez une classe représentant une ville. Elle doit avoir les propriétés nom et département et
 * une méthode affichant « la ville X est dans le département Y ». Créez des objets ville, 
 * affectez leurs propriétés, et utilisez la méthode d’affichage.
 */
require_once './exo2/Ville.php';
/**
 * EXECUTION 
 */
$ville = new Ville("Vierzon","Cher");
//$ville->nom="Vierzon";
//$ville->departement="Cher";
echo $ville->afficher();
//
echo $ville;
?>