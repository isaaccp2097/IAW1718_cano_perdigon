<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 1</title>
  </head>
  <body>
    <form method="post">


        <input type="number" name="primo" required><br><br>

        <input type="submit" value="BUSCAR">

    </form>

    <?php


      include_once("funciones.php");

      echo "".es_primo($_POST['primo']);


    ?>
  </body>
</html>
