<html>
  <head>
    <meta charset="utf-8">
    <title>practica 1</title>
  </head>
  <body>


    <form method="post">
      <fieldset>
        <legend>FORMULARIO COCHE</legend>
        <span>Matricula: </span><input type="text" name="matricula" required><br>
        <span>Kilometro: </span><input type="number" name="kilometro" ><br>
        <span>Fecha_Mat: </span><input type="date" name="fecha_mat" ><br>
        <span>Marca: </span><input type="text" name="marca" ><br>
        <span>Modelo: </span><input type="text" name="modelo" >

        <p><input type="submit" value="Send"></p>
      </fieldset>
    </form>
    <?php
      if(isset($_POST["matricula"])) {
        echo "<a href='ficha_coche.php?matricula=".$_POST['matricula']."&kilometro=".$_POST['kilometro']."&fecha_mat=".$_POST['fecha_mat']."&marca=".$_POST['marca']."&modelo=".$_POST['modelo']."'>Coche insertado</a>";

      }

     ?>



  </body>
</html>
