<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estilos.css" media="screen" title="no title">
</head>
  <body>
     <div class="container-fluid">
       <?php include("../funciones/cabecera.php"); ?>
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <form action="login.php" method="post">
            <div class="form-group">
              <label>Nombre de usuario: </label>
              <input name="nusu" type="text" class="form-control" placeholder="Nombre de usuario">
            </div>
            <div class="form-group">
              <label>Contraseña: </label>
              <input name="contrasena" type="password" class="form-control" placeholder="Contraseña">
            </div><br>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
        </div>
        <div class="col-md-3">
        </div>
      </div>
      <div  class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          Si no tienes cuenta, puedes hacerte una haciendo clic <a href="registro.php">aquí</a> o haciendo clic en el boton de sing in.
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
