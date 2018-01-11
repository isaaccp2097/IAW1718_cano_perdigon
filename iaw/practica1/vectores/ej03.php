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
      $v1=[27,89,100,75,2,6,70,50,11,9];
    //    $v1=[1,2,3];
        $suma=0;


      for ($i=0;$i<sizeof($v1);$i++) {
        $suma=$suma+$v1[$i];

      }
      $media=$suma/sizeof($v1);
      echo "$media";
    ?>
  </body>
</html>
