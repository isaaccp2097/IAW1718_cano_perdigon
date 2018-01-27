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
    <link rel="stylesheet" href="../../../css/estilos.css" media="screen" title="no title">
</head>
  <body>
     <div class="container-fluid">
       <?php include("../../funciones/cabecera.php"); ?>
       <div class="row">
         <div class="col-md-3">
         </div>
         <div class="col-md-6">
       <form action="registro.php" method="post">
         <div class="form-group">
           <label>Nombre de usuario: </label>
           <input name="nusu" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Introduce nombre usuario">
           <small class="form-text text-muted">Debe ser único, en caso de estar repetido se repetira el formulario</small>
         </div>
         <div class="form-group">
           <label>Nombre: </label>
           <input name="nombre" type="text" class="form-control" placeholder="Nombre">
           <label>Apellidos: </label>
           <input name="apellidos" type="text" class="form-control" placeholder="Apellidos">
           <small class="form-text text-muted">Introduce tu nombre y apellidos propios reales</small>
         </div>
         <div class="form-group">
           <label>Dirección de correo: </label>
           <input name="email" type="email" class="form-control" placeholder="Email">
           <small class="form-text text-muted">Introduce tu email</small>
         </div>
         <div class="form-group">
           <label>Fecha de nacimiento: </label>
           <input name="fecha" type="date" class="form-control" placeholder="Edad">
           <small class="form-text text-muted">Introduce tu Fecha de nacimiento</small>
         </div>
         <div class="form-group">
           <label>Contraseña: </label>
           <input name="contrasena" type="password" class="form-control" placeholder="Contraseña">
         </div>
         <div class="form-check">
           <input type="checkbox" class="form-check-input">
           <label class="form-check-label">Confirmo que creo una cuenta y me hago responsable de ella</label><br> <br>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
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

           $nusu=$_POST['nusu'];
           $contrasena=$_POST['contrasena'];
           $nombre=$_POST['nombre'];
           $apellidos=$_POST['apellidos'];
           $email=$_POST['email'];
           $fecha=$_POST['fecha'];

           $consulta="insert into usuarios (nusu,contrasena,nombre,apellidos,email,fecha,tipo)
           values
           ('$nusu',md5('$contrasena'),'$nombre','$apellidos','$email','$fecha','usuario')";
           if ($result = $connection->query($consulta)) {
             //header("Location: inicio.php");
           }


       }
     ?>
  </body>
</html>
