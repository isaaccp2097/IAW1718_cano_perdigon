<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>borrar</title>
  </head>
  <body>
    <?php

      if (empty($_GET)) {
        echo "No se han recibido datos del cliente";
        exit();
      }

        $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

        $connection->set_charset("utf8");


        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

        $query="DELETE from REPARACIONES WHERE IdReparacion=$_GET[cc]";
          if ($result = $connection->query($query)){
                header('Location: reparaciones.php');

        }



    ?>


  </body>
</html>
