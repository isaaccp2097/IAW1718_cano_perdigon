<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>asignar</title>
  </head>
  <body>
    <h1>Empleados</h1>
    <?php

          if (empty($_GET)) {
            echo "No se han recibido datos de la reparacion";
            exit();
          }

    ?>
    <?php if (!isset($_GET['codigo'])) : ?>
      <form method="post">
    <?php

            $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

            $connection->set_charset("utf8");

            $codigo=$_GET['cc'];
            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }


            $query="SELECT Nombre, Apellidos, $codigo from EMPLEADOS;";
              if ($result = $connection->query($query)){
                echo "<select name='codigo' required>";
                while($obj = $result->fetch_object()) {


                    echo "<option value='$obj->Nombre' ".$obj->Nombre.",".$obj->Apellidos;
                    echo "</option>";

                }
                echo "</select>";
            }

     ?>

             <input type="hidden" name="codigorep" value='<?php echo $codigo; ?>'>
             <input type="submit" name="enviar" value="Asignar" >
          </form>


     <?php else: ?>


     <?php

     $codigo = $_POST["codigo"];

       $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');
       $connection->set_charset("utf8");


       if ($connection->connect_errno) {
           printf("Connection failed: %s\n", $connection->connect_error);
           exit();
       }

       $query="INSERT INTO Intervienen values ($codigo,$_POST['codigorep'], NULL);";

         if ($result = $connection->query($query)){
             echo $query;
       }


      ?>
      <?php endif ?>

  </body>
</html>
