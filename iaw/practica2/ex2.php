<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    [
    <?php
      $a1=["2","4","6","8"];
      $a2=["7","8","9","10"];
      $tamano1=sizeof($a1);
      $tamano2=sizeof($a2);
      $tamanotot=$tamano1+$tamano2;
      $m=0;
      $n=0;

      for ($i=0; $i < $tamanotot; $i++) {
        while ($m < sizeof($a1)) {
          echo "$a1[$m],";
          $m=$m+1;
        }
        while ($n < sizeof($a2)) {
          echo "$a2[$n],";
          $n=$n+1;
        }
      }



    ?>
    ]
  </body>
</html>
