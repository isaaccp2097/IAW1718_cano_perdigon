<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    
      <form action="postejemplo22.php" method="post">
        <fieldset>
          <legend>Mi formulario</legend>
          <span>Nombre :</span><input type="text" name="nombre" required><br>
          <span>Apellido :</span><input type="text" name="apellido" required><br>
          <span>Email :</span><input type="email" name="correo" required><br>
          <span>Contraseña:</span><input type="password" name="contrasena" required><br>
          <span>Foto :</span><input type="file" name="foto" ><br>

          <p><input type="submit" value="Send"></p>
        </fieldset>
      </form>
  </body>
</html>
