<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empleados.php</title>
  </head>
  <body>
    <?php


      $connection = new mysqli("192.168.1.53", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

        $query="SELECT * from recambios";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdRecambio</th>
              <th>Descripcion</th>
              <th>UnidadBase</th>
              <th>Stock</th>
              <th>PrecioReferencia</th>
            </tr>
          </thead>

      <?php

          while($obj = $result->fetch_object()) {
              echo "<tr>";
                echo "<td><a href='borrar.php?cc=".
                     $obj->IdRecambio."'>".$obj->IdRecambio."</a></td>";
                echo "<td>".$obj->Descripcion."</td>";
                echo "<td>".$obj->UnidadBase."</td>";
                echo "<td>".$obj->Stock."</td>";
                echo "<td>".$obj->PrecioReferencia."</td>";
              echo "</tr>";
          }


          $result->close();
          unset($obj);
          unset($connection);

      }

    ?>
  </body>
</html>
