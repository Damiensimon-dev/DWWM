<?php

namespace App\Models;

use \PDO;

class DbConnect
{
    private string $dbPath;

    private PDO $pdo;

    public function __construct()
    {
        $path = dirname(__DIR__) . '/dbconf.php';

        $this->dbPath = 'sqlite:' . (require $path);

        $this->pdo = new PDO($this->dbPath, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}