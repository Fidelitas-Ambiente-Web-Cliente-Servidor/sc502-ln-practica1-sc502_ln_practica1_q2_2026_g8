<?php

declare(strict_types=1);

class IndexModel {
    private PDO $db;

    public function __construct() {

    $host = 'localhost';
    $dbname = 'mydatabase';
    $user = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try {

    $this->db = new PDO($dsn, $user, $password);
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION;
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC;

    };

    } catch (PDOException $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
    
    }

    public function getAll(): array {
        try{
            $sql = "Select nombre, descripcion, precio, categoria, disponible From cursos_destacados
                   WHERE destacado = 1 AND disponible = 1
                   ";
    $stmt = $this->db->query($sql);
    return $stmt->fetchAll();
    }catch (PDOException $e) {
        return [];
    }
    }
    
}