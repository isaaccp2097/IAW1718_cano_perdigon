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
    <div class="container">
      <div class="row" id="encabezado">
        <div class="col-md-4" id="logo">
           <h1>¡HE ESTADO AQUI!</h1>
        </div>
        <div class="col-md-8" id="inicio">
          <table>
            <tr>
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
              <td><h3><input type='button' name='mapa' value='mapa' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='lugares' value='lugares' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='missitios' value='mis sitios' id="contenidomenu"></h3></td>
              <td><h3><input type='button' name='contactanos' value='log in' id="contenidomenu"></h3></td>
            </tr>
          </table>
        </div>
      </div>

      <div class="row" id="login">
        <div class="col-md-3">
        </div>
        <div class="col-md-2">
          <?php

           if (empty($_GET)) {

            echo "<form action='inicio.php' method='post'>";
            echo "<fieldset>";
            echo "<span>Nombre :</span><br>";
            echo "<span>Contraseña :</span><br>";
            echo "<p><input type='submit' value='Send'></p>";
            echo "</fieldset>";
            echo "</form>";
           } else {
             //If $_GET contains anything (probably coming from get_source.php)
             //I dump the variable into the screen showing the content
             echo "Name:".$_GET['name']."<br>";
             echo "LastName:".$_GET['lastname']."<br";

           }
          ?>
        </div>
        <div class="col-md-4">
          <?php
            echo "<input type='text' name='nombre' required><br>";
            echo "<input type='text' name='contrasena' required><br>";
            
           ?>
        </div>
        <div class="col-md-3">
        </div>


      </div>

    </div>

  </body>
</html>
