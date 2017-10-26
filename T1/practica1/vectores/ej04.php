<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    <?php
    //calcular la media
      $v1=[27,89,100,75,2,6,70,50,2,9];
    //    $v1=[1,2,3];
        $max=$v1[0];
        $min=$v1[0];

      for ($i=0;$i<sizeof($v1);$i++) {
        //$max=$v1[$i];
          if ($max < $v1[$i]) {
            $max=$v1[$i];
          }

      }

        echo "El maximo es: $max<br>";

      for ($i=0;$i<sizeof($v1);$i++) {
        //$max=$v1[$i];
          if ($min > $v1[$i]) {
            $min=$v1[$i];
          }

      }
      echo "El menor es: $min<br>";

    ?>
  </body>
</html>
