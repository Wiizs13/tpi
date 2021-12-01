<?php

require_once("src/Idatabase.php");

class User extends Conection
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getUsersFromDatabase()
    {
        $result = [];
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        
        if ($stmt->execute()) {
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($result, $fila);
              }
        }
        return $result;
    }
}
