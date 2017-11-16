
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
  </head>
  <body>
    <?php

    if (empty($_GET)) {
      echo "NO TENGO DATOS DEL CLIENTE";
      exit();
    }


      $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');
      $connection->set_charset("utf8");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }


      $query="SELECT * from VEHICULOS where CodCliente='".$_GET["cc"]."'";
      echo $query;
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>
      <table style="border:1px solid black">
      <thead>
        <tr>
          <th>Matricula</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Color</th>
          <th>Fecha Matriculación</th>
      </thead>


      <?php
      while($obj = $result->fetch_object()) {

          echo "<tr>";
          echo "<td>".$obj->Matricula."</td>";
          echo "<td>".$obj->Marca."</td>";
          echo "<td>".$obj->Modelo."</td>";
          echo "<td>".$obj->Color."</td>";
          echo "<td>".$obj->FechaMatriculacion."</td>";
          echo "</tr>";
      }
      $result->close();
      unset($obj);
      unset($connection);

    }

    ?>

</html>
