<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    <?php
    $var1="abc";
    $var2="xyz";
    $var3="1";
    $a=1;
    $b=1;
    $letra="A";
    while ($a <= 9) {
      echo "$var1 ";
      $a=$a+1;
    }
    echo "<br>";

    do {
      echo "$var2 ";
      $b=$b+1;
    } while ($b <= 9);

    echo "<br>";


    for ($var3=1; $var3 < 10; $var3++) {
      echo "$var3 ";
    }

    echo "<ol>";


    for ($i=1; $i <= 6 ; $i++) {
      echo "<li>Articulo ";
      echo $letra++."</li>";
    }
    echo "</ol>";

    ?>
  </body>
</html>
