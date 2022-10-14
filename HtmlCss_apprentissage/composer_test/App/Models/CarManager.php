<?php

namespace App\Models;

use PDO;

class CarManager
{

    private PDO $dbConnect;

    public function __construct(DbConnect $dbConnect)
    {
        $this->dbConnect = $dbConnect->getPdo();
    }

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

    public function update(Car $car): void
    {
        $sql = "UPDATE cars SET name=:name, release=:release WHERE id=:id";

        $stmt = $this->dbConnect->prepare($sql);

        $stmt->execute([
            ':id' => $car->id,
            ':name' => $car->name,
            ':release' => $car->release,
        ]);

        $stmt->closeCursor();

    }
}