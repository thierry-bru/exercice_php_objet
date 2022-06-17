<?php
class Personne
{
    public $nom;
    public $prenom;
    private $adresse;
    public function __construct($pNom,$pPrenom,$pAdresse)
    {
        $this->nom = $pNom;
        $this->prenom = $pPrenom;
        $this->adresse = $pAdresse;
    }
    public function __toString()
    {
        return "$this->prenom $this->nom habite: $this->adresse";
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($pAdresse)
    {
        // vérifications ou calculs avant mise a jour
        // permet aussi de faire des choses quand il y a mise a jour
        if (strlen($pAdresse>10))
            $this->adresse = $pAdresse;
    }

}
?>