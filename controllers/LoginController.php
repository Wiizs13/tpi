<?php

class LoginController

{
  public function showLogin()
  {
    require_once "views/login.php";
  }

  public function doLogin()
  {

    if (!empty($_GET)) {
      require_once "models/Login.php";
      $login = new Login();
      $login->setUsername($_GET['username']);
      $login->setPassword($_GET['password']);
      $data = $login->loginMethod();
      if ($data['username'] == $_GET['username'] && $data['pass'] == $_GET['password']) {
        echo "<h1>Has iniciado sesion correctamente!</h1>";
        header("Location: index.php?action=showUsers");
      }
    }
  }
}
