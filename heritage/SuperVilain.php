<?php
require_once 'Hero.php';
class SuperVilain extends Hero
{
    public $crime;
    public function __construct($pNom,$pPrenom,$pIdentiteSecrete,$pCrime) {
        parent::__construct($pNom,$pPrenom,$pIdentiteSecrete);
        $this->crime = $pCrime;
    }
    public function afficher()
    {
        //return "$this->prenom $this->nom est $this->identiteSecrete";
        return $this->afficherIdentite();
    }

}
?>