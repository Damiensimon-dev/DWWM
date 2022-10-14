<?php

namespace App\Models;

/**
 * Représente une voiture
 */
class Car
{
    /** @var int $id Identifiant de la voiture */
    public int $id;

    /** @var string $name Nom de la voiture */
    public string $name;

    /** @var string $release Date de sortie de la voiture */
    public string $release;

    /**Construire une nouvelle voiture par défaut */
    public function __construct()
    {
        // $this->id = 0;
        // $this->name = "Twingo";
        // $this->release = "2000-01-02";
    }
}