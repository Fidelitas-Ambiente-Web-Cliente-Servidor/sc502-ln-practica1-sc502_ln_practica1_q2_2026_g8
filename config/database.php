<?php

class Database
{
    private static $instance = null;
    private $connection;

    private $host = "mysql-demo";
    private $dbname = "academia_excelencia";
    private $username = "root";
    private $password = "root";

    private function __construct()
    {
        try {

            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";

            $this->connection = new PDO(
                $dsn,
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            $this->connection->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

        } catch (PDOException $e) {

            die("Error de conexión a la base de datos: " . $e->getMessage());

        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}