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
            <a href="inicio.php"><img src="../../img/prueba1.png" class="img-fluid" alt="Responsive image"></a>
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
      <div class="row">
        <div class="col-md-12" id="divportada">
          <img id="portada" src="../../img/portada.png"  >
        </div>
      </div>
    </div>
  </body>
</html>
