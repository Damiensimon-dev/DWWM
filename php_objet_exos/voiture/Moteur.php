<?php

class Moteur {
    private string $marque;
    private float $vitesseMax;
    

public function __construct(string $_marque, float $_vitesseMax)
{
    $this->marque = $_marque;
    $this->vitesseMax = $_vitesseMax;    
}

public function getMarque() : string {
    return $this->marque;
}

public function getVitesseMax() : float {
    return $this->vitesseMax;
}



}






?>