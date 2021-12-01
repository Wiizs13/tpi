<?php

class PageController
{
    public function showHome()
    {
        require_once "views/home.php";
    }

    public function showProducts()
    {
        require_once "views/producto.php";
    }
}