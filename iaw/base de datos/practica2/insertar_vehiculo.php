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
        <span>Fecha de Matriculacion: </span><input type="date" name="fechamatriculacion" ><br>
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
      //echo $query;
        if ($result = $connection->query($query)){

        if ($result = $connection->query("SELECT * FROM VEHICULOS")){
          while($obj = $result->fetch_object()) {
              echo "<table border=1>";
              echo "<tr>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->Marca."</td>";
              echo "<td>".$obj->Modelo."</td>";
              echo "<td>".$obj->Color."</td>";
              echo "<td>".$obj->FechaMatriculacion."</td>";
              echo "<td>".$obj->CodCliente."</td>";
              echo "</tr>";
              echo "</table>";
          }
        }
      }

     ?>
     <?php endif ?>



  </body>
</html>
