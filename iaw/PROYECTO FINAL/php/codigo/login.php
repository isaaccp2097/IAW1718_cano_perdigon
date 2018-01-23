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
       <?php include("cabecera.php"); ?>

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


          $connection = new mysqli("localhost", "root", "Admin2015", "hea", 3316);


          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }


          $consulta="select * from usuarios where
          nusu='".$_POST["nusu"]."' and contrasena=md5('".$_POST["contrasena"]."');";


          if ($result = $connection->query($consulta)) {


              if ($result->num_rows===0) {
                echo "LOGIN INVALIDO";
              } else {
                $obj = $result->fetch_object();
                $tipo=$obj->tipo;

                $_SESSION["user"]=$_POST["nusu"];
                $_SESSION["language"]="es";
                $_SESSION["tipo"]=$tipo;

                if ($tipo=='administrador') {
                  header("Location: ../admin/admin.php");
                }
                else {
                    header("Location: inicio.php");
                }

              }

          } else {
            echo "Wrong Query";
          }
      }
    ?>


  </body>
</html>
