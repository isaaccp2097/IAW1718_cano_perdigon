<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // include_once sirve para incluir cualquier libreria o fichero
    // que queramos utilizar
    include_once "conexiondb.php";
    if (!$connection=conexion()) {
      exit();
    }

     ?>
  </body>
</html>
