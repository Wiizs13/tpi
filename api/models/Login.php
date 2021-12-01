<?php


class Login
{
    public static function login($username, $password)
    {date_default_timezone_set("America/Tegucigalpa");
        include_once './src/db.php';
        $usuarioLogueado = "";
        foreach ($json as $clave => $valor) {

            if ($valor['username'] == $username && $valor['password'] == $password) {

                $usuarioLogueado = $valor;
            }
        }

        if($usuarioLogueado == "")header('Location:Login');
        $_SESSION['username']= $usuarioLogueado['username'];
        $_SESSION['firstName']= $usuarioLogueado['firstName'];
        $_SESSION['lastName']= $usuarioLogueado['lastName'];
        $_SESSION['age']= $usuarioLogueado['age'];
        $_SESSION['type']= $usuarioLogueado['type'];

        $archivo = fopen('../log.txt','a');
        fputs($archivo,"Usuario: ". $usuarioLogueado['username']." - Hora: ".date("d/m/Y h:i")."\n");
        fclose($archivo);
        header('Location:Home');
    }
}