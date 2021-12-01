<?php
//Se consigue el json 
if ($data = @file_get_contents('../credenciales.json')) {
    //se decodifica
    $json = json_decode($data, true);

    return $json;
}
