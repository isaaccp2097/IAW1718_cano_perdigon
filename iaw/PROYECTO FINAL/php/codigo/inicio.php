<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="../../css/estilos.css" media="screen" title="no title">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php

      //Open the session
      session_start();

     ?>
    <div class="container">
      <div class="row" id="encabezado">
        <a href="inicio.php"><div class="col-md-4" id="logo">
           <h1>¡HE ESTADO AQUI!</h1>
        </div></a>
        <div class="col-md-8" id="inicio">
          <table>
            <tr>
              <td>
                <?php
                if (isset($_SESSION["user"])) {
                echo "<h4 id='nusu'>$_SESSION[user]</h4>";
              } else {
                session_destroy();
                echo "<h4 id='nusu'>No ha iniciado sesion</h4>";
              }
              ?>
              </td>
              <td><h3><input type='button' name='singin' value='sing in' id="in"></h3></td>
              <td><h3><a href="login.php"><input type='button' name='login' value='log in' id="up" href="login.php">
              </a></h3></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row" id="menu">
        <div class="col-md-12" id="inicio">
          <table>
            <tr>
              <td><h3><input type='button' name='mapa' value='Mapa' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='lugares' value='Lugares' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='missitios' value='Mis sitios' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='contactanos' value='Contactanos' id="contenidomenu"></h3></td>
            </tr>
          </table>
        </div>
      </div>
      </div>
  </body>
</html>
