<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASIC OPERATIONS USING PHP ARRAYS</title>
  </head>
  <body>
    <?php
      $var=["A","B","C","D"];
      $tamano=sizeof($var)-1;
      echo "<ul>";
      while ($tamano>=0) {
        echo "<li>$var[$tamano]</li>";
        $tamano=$tamano-1;
      }
      echo "</ul>";
    ?>
  </body>
</html>
