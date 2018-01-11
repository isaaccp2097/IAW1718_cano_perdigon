<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <?php
            if (empty($_GET)) {
                  echo "No tengo datos del cliente";
                  exit();

                }

            $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

            $connection->set_charset("utf8");


            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            $query="SELECT e.Nombre, e.Apellidos, r.Matricula, r.FechaEntrada,
            r.Averia, i.Horas from empleados e
            join intervienen i on e.CodEmpleado=i.CodEmpleado
            join reparaciones r on i.IdReparacion=r.IdReparacion
            where e.CodEmpleado=$_GET[cc]";

            if ($result = $connection->query($query)) {

              ?>


              <?php



                  if($obj = $result->fetch_object()) {
                    $h=$_GET["h"];
                    echo "Horas del Empleado: ".$obj->Nombre." ".$obj->Apellidos."<br>";
                    echo "Reparación: ".$obj->Matricula.", ".$obj->FechaEntrada.", ".$obj->Averia."<br>";
                    echo "<form action='intervienen.php' method='post'>";
                    echo "<input type='number' name='horas' value='$h' required><br>";

                    echo "<p><input type='submit' value='Modificar'></p>";
                    echo "</form>";

                    if (isset($_POST['horas'])) {
                      $horas=$_POST['horas'];
                      $empleado=$_GET["cc"];
                      $query="UPDATE intervienen set Horas='$horas'
                      WHERE CodEmpleado='$empleado'";

                      if ($result = $connection->query($query)) {
                        echo "Datos actualizados";
                      } else {
                        echo "Error al actualizar los datos";
                      }
                    }

                  }
                  $result->close();
                  unset($obj);
                  unset($connection);
                }

          ?>
  </body>
</html>
