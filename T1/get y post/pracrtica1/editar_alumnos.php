<html>
  <head>
    <meta charset="utf-8">
    <title>practica 1</title>
  </head>
  <body>


    <form action="editar_alumnos.php" method="post">
      <fieldset>
        <legend>Editar alumnos</legend>


     <?php
        if(isset($_GET["nombre"])) {
          $var=($_GET["nombre"]);
          echo "<span>Nombre :</span><input type='text' name='nombre' value='$var' required><br>";
          $v=($_GET["apellido"]);
          echo "<span>Apellido :</span><input type='text' name='apellido' value='$v' required><br>";
          $v=($_GET["correo"]);
          echo "<span>Correo :</span><input type='mail' name='correo' value='$v' required><br>";
        }
     ?>
        <p><input type="submit" value="Send" ></p>
      </fieldset>
    </form>

  </body>
</html>
