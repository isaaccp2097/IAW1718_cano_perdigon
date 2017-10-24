<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <?php
      $number=5;
        echo "<tr><td>MULTIPLICATION TABLE $number</td></tr>";
        for ($i=1;$i<=10;$i++) {
          $result=$number*$i;
          echo "<br><tr><td>$number x $i = $result </td></tr>";
        }
      ?>
  </body>
</html>
