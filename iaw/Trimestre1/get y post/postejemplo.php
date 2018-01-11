<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <?php if (!isset($_POST["contrasena"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Mi formulario</legend>
            <span>Nombre :</span><input type="text" name="nombre" required><br>
            <span>Apellido :</span><input type="text" name="apellido" required><br>
            <span>Email :</span><input type="email" name="correo" required><br>
            <span>Contraseña:</span><input type="password" name="contrasena" required><br>
            <span>Foto :</span><input type="src" name="foto" ><br>
            <!-- si no hay campos required(requeridos) debo poner debajo
            <p><input> type="submit" name="" value=""></p>
            quiere decir que debo poner name vacío -->
            <p><input type="submit" value=""></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php
            echo "<h3>Vista de resultado</h3>";
            var_dump($_POST);
        ?>

      <?php endif ?>

  </body>
</html>
