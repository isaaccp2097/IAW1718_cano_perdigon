<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
    <style media="screen">
      .fondo1{
        background-color: grey;
        height: 50px;
        width: 50px;
      }
      .fondo2{
        background-color: red;
        height: 50px;
        width: 50px;
      }

    </style>
  </head>
  <body>
    <table border="1">
    <?php

      for ($i=0; $i < 10 ; $i++) {
        echo "<tr>";
          for ($a=0; $a <10 ; $a++) {
            if ($i%2==0) {
              echo "<td class='fondo2'></td>";
            }
            else {
              echo "<td class='fondo1'></td>";
            }
          }
        echo "</tr>";
      }



    ?>
    </table>
  </body>
</html>
