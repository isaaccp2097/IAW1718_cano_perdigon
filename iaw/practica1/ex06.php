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
        $fecha1=date("d");
        if ($fecha1<10) {
          echo "Fuera de servicio";
        } else {
          echo "Servicio activo";
        }
      ?>
  </body>
</html>
