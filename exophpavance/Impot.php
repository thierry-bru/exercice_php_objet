<?php
class Impot
{
    public $montantRevenu; // attributs
    /**
     * ●	un constructeur, 
     * une méthode AfficheImpot() qui retourne une chaîne contenant le message à afficher
     *  (« Mr Durant votre impôt est de 600 euros » par exemple)
     * une méthode CalculImpôt() qui retourne le montant de l’impôt suivant le revenu.
     * Les taux de l’impôt (20% et 15%) devront être définis dans des constantes.
     */
    public function __construct($pMontantRevenu)
    {
        $this->montantRevenu = $pMontantRevenu;  
    }
    public function AfficheImpot():String
    {
        return "Mr Durant votre impôt est de".$this->calculImpot()." euros";
    }
    public function calculImpot():float
    {
        /**
         * 15% pour des revenus inférieurs à 15 000 euros
         * 20 % pour des revenus supérieurs à 15 000.
         */
        if ($this->montantRevenu<15000)
            $taux = 0.15;
        else
            $taux = 0.20;

        return $this->montantRevenu*$taux;

    }

}
?>