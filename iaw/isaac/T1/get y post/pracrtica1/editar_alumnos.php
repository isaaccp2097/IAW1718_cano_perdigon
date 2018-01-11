<html>
  <head>
    <meta charset="utf-8">
    <title>practica 1</title>
  </head>
  <body>


    <form method="post">
      <fieldset>
        <legend>Editar alumnos</legend>


     <?php
        if(isset($_GET["nombre"]) && !isset($_POST["nombre"])) {
          $var=($_GET["nombre"]);
          echo "<span>Nombre :</span><input type='text' name='nombre' value='$var' required><br>";
          $v=($_GET["apellido"]);
          echo "<span>Apellido :</span><input type='text' name='apellido' value='$v' required><br>";
          $v=($_GET["correo"]);
          echo "<span>Correo :</span><input type='email' name='correo' value='$v' required><br>";
          echo "<p><input type='submit' value='Editar' ></p>";
        }

        else {
          if (empty($_GET)) {
            echo "No tenemos ningun dato para editar";
          }
          else {
            echo "<h1>Datos actualizados</h1>";
            echo "<b>Nombre: </b>".$_POST["nombre"]."<br>";
            echo "<b>Apellido: </b>".$_POST["apellido"]."<br>";
            echo "<b>Correo: </b>".$_POST["correo"]."<br>";
            echo "<a href='tablaalumnos.php'>Volver</a>";
          }

        }
     ?>

      </fieldset>
    </form>

  </body>
</html>
