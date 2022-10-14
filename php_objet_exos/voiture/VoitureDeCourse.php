<?php

class VoitureDeCourse extends Voiture{

public function __construct(string $_marque, string $_modele, int $_poids)
{
    $this->marque = $_marque;
    $this->modele = $_modele;
    $this->poids = $_poids;
}

public function calculeDeVitesse(): int {
    $VitesseMax = 0;

    $VitesseMax = $this->monMoteur-($this->poids*0.5);
    
}

}

?>