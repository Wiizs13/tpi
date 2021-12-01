<?php
require("src/Idatabase.php");

class Login extends Conection
{
    private $username;
    private $password;

    public function __construct()
    {
        parent::__construct();
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function loginMethod()
    {
        $result = false;


        $sql = "SELECT * FROM users WHERE username = :username AND pass = :pass";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $this->getUsername());
        $stmt->bindValue(":pass", $this->getPassword());
        if ($stmt->execute()) {
            $nRow = $stmt->rowCount();
            if ($nRow == 1) {

                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        }
        return $result;
    }
}
