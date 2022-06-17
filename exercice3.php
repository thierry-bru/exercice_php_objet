<?php
/**
 * Créez une classe représentant une personne. Elle doit avoir les propriétés nom, prénom et adresse,
 *  ainsi qu’un constructeur. 
 * Une méthode getPersonne() doit retourner les coordonnées complètes de la personne. 
 * Une méthode setAdresse() doit permettre de modifier l’adresse de la personne. 
 * Créez des objets personne, et utilisez l’ensemble des méthodes.
 */
require_once './exo3/Personne.php';
 $personne = new Personne("BRU","Thierry","Rue du paradis, Paris");
 echo $personne;
 // ne fonctionne pas quand adresse est en private
 //$personne->adresse = "Rue de la société Francaise, Vierzon";
 echo $personne;
 $personne->setAdresse("Rue");
 echo $personne;
?>