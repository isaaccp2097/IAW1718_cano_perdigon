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

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * from empleados";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>CodEmpleado</th>
              <th>DNI</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Direccion</th>
              <th>Teléfono</th>
              <th>CP</th>
              <th>FechaAlta</th>
              <th>Categoria</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td><a href='intervienen.php?cc=".
                     $obj->CodEmpleado."'>".$obj->CodEmpleado."</a></td>";
                echo "<td>".$obj->Nombre."</td>";
                echo "<td>".$obj->Apellidos."</td>";
                echo "<td>".$obj->DNI."</td>";
                echo "<td>".$obj->Direccion."</td>";
                echo "<td>".$obj->Telefono."</td>";
                echo "<td>".$obj->CP."</td>";
                echo "<td>".$obj->FechaAlta."</td>";
                echo "<td>".$obj->Categoria."</td>";
              echo "</tr>";
          }


          $result->close();
          unset($obj);
          unset($connection);

      }

    ?>
  </body>
</html>
