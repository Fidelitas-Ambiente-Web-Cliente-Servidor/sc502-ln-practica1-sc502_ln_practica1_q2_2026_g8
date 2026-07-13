<?php

require_once 'config/Database.php';

class ContactoModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::getInstance()->getConnection();
    }

    public function guardar($nombre, $correo, $telefono, $asunto, $mensaje)
    {
        $sql = "INSERT INTO contactos
                (nombre, correo, telefono, asunto, mensaje)
                VALUES
                (:nombre, :correo, :telefono, :asunto, :mensaje)";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':telefono' => $telefono,
            ':asunto' => $asunto,
            ':mensaje' => $mensaje
        ]);
    }
}