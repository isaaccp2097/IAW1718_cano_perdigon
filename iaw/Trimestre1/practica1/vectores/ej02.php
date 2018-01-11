<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    <?php

      $v1=["Nombre" => "Isaac",
          "Apellidos" => "Cano Perdigon",
          "Direccion" => "Ortega y Gasset, 20",
          "Email" => "isaaccp2097@gmail.com"];

          echo "<table>";
          echo "<tr>";
      foreach ($v1 as $o1 => $d) {
          echo "<td><b>$o1</b></td>";
      }
          echo "</tr>";
          echo "<tr>";
      foreach ($v1 as $o1 => $d) {
          echo "<td>$d</td>";
      }
          echo "</tr>";
          echo "</table>";


    ?>
  </body>
</html>
