<html>
  <head>
    <meta charset="utf-8">
    <title>practica 1</title>
  </head>
  <body>

  <?php if (!isset($_POST["matricula"])) : ?>
    <form method="post">
      <fieldset>
        <legend>FORMULARIO COCHE</legend>
        <span>Matricula: </span><input type="text" name="matricula" required><br>
        <span>Marca: </span><input type="text" name="marca" ><br>
        <span>Modelo: </span><input type="text" name="modelo" ><br>
        <span>Color: </span><input type="text" name="color" ><br>
        <span>FechaMatriculacion: </span><input type="date" name="fechamatriculacion" ><br>
        <span>CodCliente: </span><input type="text" name="codcliente" >

        <p><input type="submit" value="Send"></p>
      </fieldset>
    </form>
    <?php else: ?>
    <?php

          $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

          $connection->set_charset("utf8");


          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }




      $m=$_POST['matricula'];
      $mar=$_POST['marca'];
      $mod=$_POST['modelo'];
      $color=$_POST['color'];
      $fm=$_POST['fechamatriculacion'];
      $cod=$_POST['codcliente'];

      $query="INSERT INTO VEHICULOS VALUES('$m','$mar','$mod','$color','$fm','$cod')";
      echo $query;

        if ($result = $connection->query($query)) {
          echo "coche insertado";

            echo "<table border=1>";
              echo "<tr>";
              echo "<td>".$m."</td>";
              echo "<td>".$mar."</td>";
              echo "<td>".$mod."</td>";
              echo "<td>".$color."</td>";
              echo "<td>".$fm."</td>";
              echo "<td>".$cod."</td>";
              echo "</tr>";
            echo "</table>";

        /*  $result->close();
          unset($obj);
          unset($connection);*/
    }
     ?>
     <?php endif ?>



  </body>
</html>
