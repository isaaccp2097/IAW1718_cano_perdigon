
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
  </head>
  <body>
    <?php


      $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

      $connection->set_charset("utf8");


      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }


      if ($result = $connection->query("select * from CLIENTES;")) {

      ?>

      <table style="border:1px solid black">
      <thead>
        <tr>
          <th>CodCliente</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>DNI</th>
          <th>Direccion</th>
          <th>Teléfono</th>
      </thead>

  <?php

      //FETCHING OBJECTS FROM THE RESULT SET
      //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
      while($obj = $result->fetch_object()) {
          //PRINTING EACH ROW
          echo "<tr>";
          echo "<td><a href='coches_clientes.php?cc=".
            $obj->CodCliente."'>".$obj->CodCliente."</a></td>";
          echo "<td>".$obj->Nombre."</td>";
          echo "<td>".$obj->Apellidos."</td>";
          echo "<td>".$obj->DNI."</td>";
          echo "<td>".$obj->Direccion."</td>";
          echo "<td>".$obj->Telefono."</td>";
          echo "</tr>";
      }

      //Free the result. Avoid High Memory Usages
      $result->close();
      unset($obj);
      unset($connection);

  } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>

</html>
