<?php
    function conexion($host="192.168.1.53",
                      $user="root",
                      $password="Admin2015",
                      $bd="tf",
                      $port=3316){

    $connection = new mysqli($host, $user,$password, $db,$port);
    $connection->set_charset("uft8");

    if ($connection->connect_errno) {
        return false;
    }
    return $conexion;
}

?>
