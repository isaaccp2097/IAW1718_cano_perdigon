<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>informe</title>
  </head>
  <body>


        <?php

              $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

              $connection->set_charset("utf8");


              if ($connection->connect_errno) {
                  printf("Connection failed: %s\n", $connection->connect_error);
                  exit();
              }

              $query="SELECT r.Descripcion from REPARACIONES rep
              join Incluyen i on rep.IdReparacion=i.IdReparacion
              join RECAMBIOS r on i.IdRecambio=r.IdRecambio
              where rep.IdReparacion=$_GET[clave]";

              if ($result = $connection->query($query)) {



                ?>
                <?php


                    echo "<h3>Piezas usadas en la reparacion</h3>";
                    while($obj = $result->fetch_object()) {

                      echo "<ul>";
                      echo "<li>".$obj->Descripcion."</li>";
                      echo "</ul>";


                    }
                    $result->close();
                    unset($obj);
                    unset($connection);
                  }

            ?>

            <?php

                  $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

                  $connection->set_charset("utf8");


                  if ($connection->connect_errno) {
                      printf("Connection failed: %s\n", $connection->connect_error);
                      exit();
                  }

                  $query="SELECT e.Nombre from REPARACIONES rep
                  join Intervienen i on rep.IdReparacion=i.IdReparacion
                  join EMPLEADOS e on i.CodEmpleado=e.CodEmpleado
                  where rep.IdReparacion=$_GET[clave]";

                  if ($result = $connection->query($query)) {



                    ?>
                    <?php


                        echo "<h3>Empleados que han intervenido en la reparacion</h3>";
                        while($obj = $result->fetch_object()) {

                          echo "<ul>";
                          echo "<li>".$obj->Nombre."</li>";
                          echo "</ul>";


                        }
                        $result->close();
                        unset($obj);
                        unset($connection);
                      }

                ?>
  </body>
</html>
