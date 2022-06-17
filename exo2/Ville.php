<?php
class Ville
{
public $nom;
public $departement;

public function afficher():String
// le String n'est pas obligatoire pour que cela fonctionne, c'est une bonne pratique;
{
    return "la ville $this->nom est dans le département $this->departement";
}
public function __construct($pNom,$pDepartement)
// le constructeur existe par défaut car Ville est une classe et donc un Object.
{
    $this->nom = $pNom;
    $this->departement = $pDepartement;
}
public function __toString()
// surcharge de la méthode toString héritée de Object
{
    return "$this->nom : $this->departement"; 
}
}
?>