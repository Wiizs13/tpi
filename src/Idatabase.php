<?php
require_once("dbConfig.php");

interface Database
{
    public function getAll();
    public function getOne();
}

interface Mysql extends Database
{
}

interface Postgre extends Database
{
}

class Conection implements Mysql
{
    protected $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET CHARACTER SET " . DB_CHARSET);
            return $this->conn;
        } catch (Exception $e) {
            print "!Error¡: " . $e->getMessage() . "</br>";
            die();
        }
    }

    public function getAll()
    {
        return true;
    }
    public function getOne()
    {
    }
}
