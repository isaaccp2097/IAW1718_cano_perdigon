<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>informe</title>
  </head>
  <body>


    piezas
    empleados


        <?php

              $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

              $connection->set_charset("utf8");


              if ($connection->connect_errno) {
                  printf("Connection failed: %s\n", $connection->connect_error);
                  exit();
              }

              $query="SELECT * from REPARACIONES";

              if ($result = $connection->query($query)) {

                printf("<p>The select query returned %d rows.</p>", $result->num_rows);

                ?>

                <table style="border:1px solid black">
                  <thead>
                    <tr>
                      <th>Id reparacion</th>
                      <th>Matricula</th>
                      <th>Fecha entrada</th>
                      <th>Km</th>
                      <th>Avería</th>
                      <th>Fecha Salida</th>
                      <th>Reparado</th>
                      <th>Observaciones</th>
                      <th>Herramientas</th>
                    </thead>
                <?php



                    while($obj = $result->fetch_object()) {

                      echo "<tr>";
                      echo "<td>".$obj->IdReparacion."</td>";
                      echo "<td>".$obj->Matricula."</td>";
                      echo "<td>".$obj->FechaEntrada."</td>";
                      echo "<td>".$obj->Km."</td>";
                      echo "<td>".$obj->Avería."</td>";
                      echo "<td>".$obj->FechaSalida."</td>";
                      echo "<td>".$obj->Reparado."</td>";
                      echo "<td>".$obj->Observaciones."</td>";
                      echo "<td><a href='borrar.php?clave=".$obj->IdReparacion."'><img src='x.png'></a>
                      <a href='asignar.php?clave=".$obj->IdReparacion."'><img src='a.jpg'></a>
                      <a href='borrar.php?clave=".$obj->IdReparacion."'><img src='o.png'></a></td>";
                      echo "</tr>";


                    }
                    $result->close();
                    unset($obj);
                    unset($connection);
                  }

            ?>
  </body>
</html>
