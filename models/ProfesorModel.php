<?php

require_once __DIR__ . '/../config/database.php';


class ProfesorModel
{

    private $db;


    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }



    public function getAll()
    {

        $sql = "SELECT *
                FROM profesores
                WHERE activo = 1
                ORDER BY id ASC";


        $stmt = $this->db->prepare($sql);

        $stmt->execute();


        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }




    public function getById($id)
    {

        $sql = "SELECT *
                FROM profesores
                WHERE id = :id
                AND activo = 1";


        $stmt = $this->db->prepare($sql);


        $stmt->bindParam(
            ':id',
            $id,
            PDO::PARAM_INT
        );


        $stmt->execute();


        return $stmt->fetch(PDO::FETCH_ASSOC);

    }


}