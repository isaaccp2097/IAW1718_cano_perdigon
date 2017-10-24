<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE 01: Hello World</title>
  </head>
  <body>
      <?php
        //Echo writes a string into the file output
        $num1=7;
        $num2=2;
        $suma=$num1+$num2;
        $resta=$num1-$num2;
        $multiplicacion=$num1*$num2;
        $division=round($num1/$num2);

        echo "La suma de ".$num1." y ".$num2." es ".$suma."<br>";
        echo "La resta de ".$num1." y ".$num2." es ".$resta."<br>";
        echo "La multiplicación de ".$num1." y ".$num2." es ".$multiplicacion."<br>";
        echo "La division de ".$num1." y ".$num2." es ".$division."<br>";
      ?>
  </body>
</html>
