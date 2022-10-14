<?php

class Voiture {

    protected string $marque;
    protected string $modele;
    protected int $poids = 1000;
    protected Moteur $monMoteur;



    public function __construct(string $_marque, string $_modele, int $_poids, Moteur $_monMoteur) 
    {
        $this->marque = $_marque;
        $this->modele = $_modele;
        $this->poids = $_poids;
        $this->monMoteur = $_monMoteur;
    }

    public function getMarque() :string {
        return $this->marque;
    }

    public function getModele() : string {
        return $this->modele;
    }

    public function getPoid() : int {
        return $this->poids;
    }

    public function setPoid(int $_poids) {
        $this->poids = $_poids;
    }

    public function getMoteur() : Moteur {
        return $this->monMoteur;
    }

    public function setMoteur(Moteur $_nouveauMoteur) {
        $this->monMoteur = $_nouveauMoteur;
    }

    public function calculeDeVitesse() : int {
        $voitureVitesseMax = 0;

        $voitureVitesseMax = $this->monMoteur-($this->poids*0.30); 
        
       
    }


}

?>