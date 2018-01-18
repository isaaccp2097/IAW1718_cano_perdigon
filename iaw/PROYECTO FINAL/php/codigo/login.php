<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/estilos.css" media="screen" title="no title">
</head>
  <body>
     <div class="container">
      <div class="row" id="encabezado">
        <div class="col-md-4" id="logo">
            <!--<a href="inicio.php"><h1>¡HE ESTADO AQUI!</h1></a>-->
            <img src="../../img/prueba1.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-5" id="inicio">
                <?php
                if (isset($_SESSION["user"])) {
                echo "<h4 id='nusu'>$_SESSION[user]</h4>";
              } else {
                session_destroy();
                echo "<h4 id='nusu'>No ha iniciado sesion</h4>";
              }
              ?>
        </div>


        <div class="col-md-3" id="inicio">
            <td><button type="button" class="btn btn-success"><a href="registrarse.php">
            SING IN</a></button></td>
            <td><a href="login.php"><button type="button" class="btn btn-success" >
            LOG IN</button></a></td>
        </div>

      </div>
      <div class="row" id="menu">
        <div class="col-md-3" id="inicio">
              <button type="button" class="btn btn-success"><a href="mapa.php"><h4>Mapa
              </h4></a></button>
        </div>
        <div class="col-md-3" id="inicio">
              <button type="button" class="btn btn-success"><a href="lugares.php"><h4>Lugares
              </h4></a></button>
        </div>
        <div class="col-md-3" id="inicio">
              <button type="button" class="btn btn-success"><a href="missitios.php"><h4>Mis sitios
              </h4></a></button>
        </div>
        <div class="col-md-3" id="inicio">
              <button type="button" class="btn btn-success"><a href="contactanos.php"><h4>Contactanos
              </h4></a></button>
        </div>
      </div>

      <div class="row" id="login">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <form action="login.php" method="post">

            <p>Nombre: <input name="nusu" required></p>
            <p>Contraseña: <input name="contrasena" type="password" required></p>
            <p><input type="submit" value="Log In"></p>

          </form>
        </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>



    <?php

        if (isset($_POST["nusu"])) {


          $connection = new mysqli("192.168.100.155", "root", "Admin2015", "hea", 3316);


          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }


          $consulta="select * from usuarios where
          nusu='".$_POST["nusu"]."' and contrasena=md5('".$_POST["contrasena"]."');";



          if ($result = $connection->query($consulta)) {


              if ($result->num_rows===0) {
                echo "USUARIO INCORRECTO";
              } else {

                $_SESSION["user"]=$_POST["nusu"];
                $_SESSION["language"]="es";
                echo "login correcto";
                header("Location: inicio.php");
              }

          } else {
            echo "Wrong Query";
          }
      }
    ?>


  </body>
</html>
