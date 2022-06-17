<?php

class Hero
{
    public $nom;
    public $prenom;
    public $identiteSecrete;
    public function __construct($pNom,$pPrenom,$pIdentiteSecrete)
    {
        $this->nom=$pNom;
        $this->prenom=$pPrenom;
        $this->identiteSecrete = $pIdentiteSecrete;
    }
    protected function afficherIdentite()
    {
        return "$this->prenom $this->nom est $this->identiteSecrete";
    }
}