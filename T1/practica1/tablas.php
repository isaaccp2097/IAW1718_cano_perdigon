<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <table>

    <?php
      $filas=5;
        for ($i=1;$i<=$filas;$i++) {
          echo "<tr>";
          for ($a=1;$a<=$filas;$a++) {
            echo "<td>".x."</td>";
          }
          echo "</tr>";
        }
      ?>

      </table>
  </body>
</html>
