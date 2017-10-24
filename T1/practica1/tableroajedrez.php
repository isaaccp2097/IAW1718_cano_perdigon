<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <LINK REL=StyleSheet HREF="/var/www/html/iaw/practica1/ajedrez.css" TYPE="text/css" MEDIA=screen>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style media="screen">
      .celda{
        width: 100px;
        background-color: black;
        height: 100px;
      }
      .celda2{
        width: 100px;
        background-color: white;
        height: 100px;
      }
    </style>
  </head>
  <body>
    <table>

    <?php
      $filas=4;
        for ($i=1;$i<=$filas;$i++) {
          echo "<tr>";
          for ($a=1;$a<=$filas;$a++) {
            if (($i+$a) % 2 == 0) {
              echo "<td class='celda'>x</td>";
            }else {
              echo "<td class='celda2'>a</td>";
            }
          }
          echo "</tr>";
        }
      ?>

      </table>
  </body>
</html>
