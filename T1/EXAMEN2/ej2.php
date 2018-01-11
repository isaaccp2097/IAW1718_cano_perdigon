<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ej2</title>
    <style media="screen">
      #color {
        background-color: red;
        color: white;
      }
    </style>
  </head>
  <body>
    <?php
      $vector=[[3,4,5,6,7,5],[3,4,0,6,7,0],[3,4,5,0,7,0],[0,4,5,6,7,5],[3,4,5,6,7,5],[3,0,5,6,0,5]];
      echo "<table border='1'>";
      for ($i=0; $i <sizeof($vector) ; $i++) {
        echo "<tr>";
        for ($a=0; $a < sizeof($vector[$i]); $a++) {
          if ($vector[$i]==0) {
            echo "<td id='color'>$vector[$i]</td>";
          }
          else {
            echo "<td>$vector[$i]</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";



     ?>
  </body>
</html>
