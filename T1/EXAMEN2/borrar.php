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

        $query="DELETE from recambios WHERE IdRecambio=$_GET[cc]";
          if ($result = $connection->query($query)){
                echo "RECAMBIO BORRADO";

                echo "<a href='recambios.php'>Volver a recambios.php</a>";

        }



    ?>


  </body>
</html>
