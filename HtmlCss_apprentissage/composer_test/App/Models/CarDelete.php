<?php

namespace App\Models;

use PDO;

class CarDelete
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

    // public function delete(Car $car): void
    // {
    //     $sql = "DELETE FROM cars WHERE id=:id";

    //     $stmt = $this->dbConnect->prepare($sql);

    //     $stmt->execute([
    //         ':id' => $car->id,
    //     ]);

    //     $stmt->closeCursor();

    // }

    public function supprimer(Car $car): int
    {

        return $this->dbConnect->exec("DELETE FROM cars WHERE id= ".$car->id);

    }
}