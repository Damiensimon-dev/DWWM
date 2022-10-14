<?php

namespace App\Models;

use \PDO;

class CarRepository
{
    /** @var PDO $dbConnect */
    private PDO $dbConnect;

    /**
     * Construire un nouveau référentiel Car
     * @param DbConnect $connect La connexion a utiliser
     */
    public function __construct(DbConnect $connect)
    {
        $this->dbConnect = $connect->getPdo();
    }

    /** 
     * @return array le résultat de la requête sous forme de tableau. Le tableau contient des instances de Car
     */
    public function selectAll(): array
    {
        $sql = "SELECT id, name, release FROM cars;";
        $stmt = $this->dbConnect->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Car::class);
        return $result;
    }

    public function select(int $id): Car
    {
        $sql = "SELECT id, name, release FROM cars WHERE id=id";
        $stmt = $this->dbConnect->prepare($sql);
        
        $stmt->execute([
            'id' => $id
        ]);

        $result = $stmt->fetch(PDO::FETCH_CLASS, Car::class);
        
        $stmt->closeCursor();

        return $result;
    }

    public function insert(Car $car): void
    {
        $sql = "INSERT INTO cars (id, name, release) VALUES (:id, :name, :release)";
        
        $stmt = $this->dbConnect->prepare($sql);
        
        $stmt->execute([
            ':id' => $car->id,
            ':name' => $car->name,
            ':release' => $car->release,
        ]);

        $stmt->closeCursor();
    }
}