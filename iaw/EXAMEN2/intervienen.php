<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intervienen.php</title>
  </head>
  <body>
    <?php

      if (empty($_GET)) {
        echo "No tengo datos del cliente";
        exit();

      }

      //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.53", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT e.Nombre, e.Apellidos, r.Matricula,
        r.Averia, r.FechaEntrada, i.Horas from empleados e join intervienen i
        on e.CodEmpleado=i.CodEmpleado join reparaciones r
        on i.IdReparacion=r.IdReparacion WHERE
        e.CodEmpleado='".$_GET["cc"]."'";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>


      <?php

          if($obj = $result->fetch_object()) {
              echo "Intervenciones de: ".$obj->Nombre." ".$obj->Apellidos."<br>";
          }
      ?>

    <table border="1">
      <tr>
        <td>Matricula</td>
        <td>Averia</td>
        <td>FechaEntrada</td>
        <td>Horas</td>
      </tr>


      <?php

          while($obj = $result->fetch_object()) {
              echo "<tr>";
              $cc=$_GET["cc"];
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->Averia."</td>";
                echo "<td>".$obj->FechaEntrada."</td>";
                echo "<td><a href='modificar_horas.php?cc=$cc&h=".$obj->Horas."'>".$obj->Horas."</a></td>";
              echo "</tr>";
          }

          $result->close();
          unset($obj);
          unset($connection);

      }
      else {
        echo "EL EMPLEADO NO HA INTERVENIDO EN NINGUNA REPARACIÓN";
      }

    ?>
    </table>
  </body>
</html>
