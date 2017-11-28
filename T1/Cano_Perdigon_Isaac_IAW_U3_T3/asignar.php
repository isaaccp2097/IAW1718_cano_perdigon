<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>asignar</title>
  </head>
  <body>
    <h1>Empleados</h1>
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

            $query="SELECT Nombre, Apellidos, CodEmpleado from EMPLEADOS;";
              if ($result = $connection->query($query)){
                echo "<select>";
                while($obj = $result->fetch_object()) {
                  /*  echo "<table border=1>";
                    echo "<tr>";
                    echo "<td>".$obj->Nombre."</td>";
                    echo "<td>".$obj->Apellidos."</td>";
                    echo "</tr>";
                    echo "</table>";*/

                    echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre.",".$obj->Apellidos;
                    echo "</option>";

                }
                echo "</select>";
            }




     ?>
     <input type="submit" name="enviar" value="Enviar">
  </body>
</html>
