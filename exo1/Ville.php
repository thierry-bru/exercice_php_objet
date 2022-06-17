<?php
class Ville
{
public $nom;
public $departement;

public function afficher():String
{
    return "la ville $this->nom est dans le département $this->departement";
}
}
?>