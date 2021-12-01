<?php

class PageController

{
  public function showHome()
  {
    require_once "views/home.php";
  }

  public function showProductos()
  {
    require_once "views/producto.php";
  }

  public function showUsers()
  {
    require_once "models/User.php";

    $usersObject = new User();
    $users = $usersObject->getUsersFromDatabase();
    
    require_once "views/user.php";
  }
}
