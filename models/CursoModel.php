<?php

require_once __DIR__ . '/../config/database.php';

class CursoModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT *
                FROM cursos
                WHERE disponible = 1
                ORDER BY id ASC";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByCategoria($cat)
    {
        $sql = "SELECT *
                FROM cursos
                WHERE categoria = :categoria
                AND disponible = 1
                ORDER BY id ASC";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':categoria', $cat, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}