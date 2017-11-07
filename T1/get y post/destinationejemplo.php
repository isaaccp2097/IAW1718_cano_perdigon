<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>practica 1</title>
  </head>
  <body>
    <?php
    if (empty($_GET)) {
      echo "No se han mandado parametros";
    }
    else {
      if (isset($_GET["nombre"])) {
        echo "Solo tengo el nombre<br>";
        echo $_GET["nombre"];
      }
      else if (isset($_GET["apellido"]){
        echo "solo tengo el apellido";
        echo $_GET["apellido"];
      }
      else if (isset($_GET["edad"]){
        echo "solo tengo la edad";
        echo $_GET["edad"];
      }
      else {
        echo "parametro erroneo";
      }
    }
     ?>
  </body>
</html>
