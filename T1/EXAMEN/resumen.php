<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio3</title>
  </head>
  <body>
    <?php

          $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

          $connection->set_charset("utf8");


          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }

          $n="c.Nombre";
          $a="c.Apellidos";
          $d="c.Direccion";
          $query="SELECT $n, $a, $d from
          clientes c join facturas f on c.CodCliente=f.CodCliente
          join reparaciones r on f.IdReparacion=r.IdReparacion
          where r.IdReparacion=$_GET[cc]";

          if ($result = $connection->query($query)) {

            printf("<h1>Reparaciones</h1>", $result->num_rows);


            while($obj = $result->fetch_object()) {


              echo "<b>DATOS DEL CLIENTE QUE HA PAGADO LA REPARACION:</b> ".$obj->Nombre."
              ".$obj->Apellidos." ".$obj->Direccion."<br>";
            }
                $result->close();
                unset($obj);
                unset($connection);
              }

        ?>
        <!--            SEGUNDA CONSULTA                         - -->
        <?php

              $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

              $connection->set_charset("utf8");


              if ($connection->connect_errno) {
                  printf("Connection failed: %s\n", $connection->connect_error);
                  exit();
              }

              $mat="v.Matricula";
              $mod="v.Modelo";
              $mar="v.Marca";
              $fecha="r.FechaEntrada";
              $query="SELECT $mat, $mod, $mar, $fecha from
              vehiculos v join reparaciones r on v.Matricula=r.Matricula
              where r.IdReparacion=$_GET[cc]";

              if ($result = $connection->query($query)) {

                printf("", $result->num_rows);



                while($obj = $result->fetch_object()) {


                  echo "<b>DATOS DEL VEHICULO QUE SE HA REPARADO:</b> ".$obj->Matricula."
                  ".$obj->Modelo." ".$obj->Marca."<br>";
                  echo "<b>FECHA DE LA REPARACION:</b> ".$obj->FechaEntrada."<br>";
                }
                    $result->close();
                    unset($obj);
                    unset($connection);
                  }

            ?>
            <!--            TERCERA CONSULTA                         - -->
            <?php

                  $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

                  $connection->set_charset("utf8");


                  if ($connection->connect_errno) {
                      printf("Connection failed: %s\n", $connection->connect_error);
                      exit();
                  }

                  $des="r.Descripcion";

                  $mar="v.Marca";
                  $fecha="r.FechaEntrada";
                  $query="SELECT $des, sum(PrecioReferencia) suma from recambios r
                  join incluyen i on r.IdRecambio=i.IdRecambio
                  join reparaciones rep on i.IdReparacion=rep.IdReparacion
                  where rep.IdReparacion=$_GET[cc]";

                  if ($result = $connection->query($query)) {

                    printf("", $result->num_rows);


                    $cont=1;

                    while($obj = $result->fetch_object()) {


                      echo "<b>RESUMEN DE LOS RECAMBIOS UTILIZADOS EN LA REPARACION:</b><br>
                      Nombre de Pieza $cont :"
                      .$obj->Descripcion.": Unidades Precio de Pieza total para esa pieza
                      ".$obj->suma."<br>";
                    }
                    if ($result==NULL) {
                      echo "NO SE HAN UTILIZADO RECAMBIOS PARA ESA REPARACION";
                    }
                        $result->close();
                        unset($obj);
                        unset($connection);
                      }

                ?>


  </body>
</html>
