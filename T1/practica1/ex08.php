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
        $num=rand(1,5);

        if ($num == 1) {
          echo "UNO";
        }elseif ($num == 2) {
          echo "DOS";
        }elseif ($num == 3) {
          echo "TRES";
        }elseif ($num == 4) {
          echo "CUATRO";
        }elseif ($num == 5) {
          echo "CINCO";
        }
      ?>
  </body>
</html>
