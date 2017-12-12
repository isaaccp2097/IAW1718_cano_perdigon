<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <form method="post">
        <fieldset>
          <legend>Coches Viejos</legend>
          <span>KM:</span><input type="number" name="kilometro" required><br>

          <p><input type="submit" value="BUSCAR"></p>
        </fieldset>
      </form>


      <?php

            $connection = new mysqli('192.168.1.53', 'root', 'Admin2015', 'tf', '3316');

            $connection->set_charset("utf8");


            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }

            $query="SELECT * from vehiculos v
            join reparaciones r on v.Matricula=r.Matricula
            where r.Km>'$_POST[kilometro]'";

            if ($result = $connection->query($query)) {

              printf("<h1>Vehiculos viejos</h1>", $result->num_rows);

              ?>

              <table border="1">
                <thead>
                  <tr>
                    <th>Matricula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Km</th>
                    <th>Color</th>
                  </tr>
                </thead>
              <?php



                  while($obj = $result->fetch_object()) {

                    echo "<tr>";
                    echo "<td>".$obj->Matricula."</td>";
                    echo "<td>".$obj->Marca."</td>";
                    echo "<td>".$obj->Modelo."</td>";
                    echo "<td>".$obj->Km."</td>";
                    echo "<td>".$obj->Color."</td>";
                    echo "</tr>";



                  }
                  echo "</table>";
                  $result->close();
                  unset($obj);
                  unset($connection);
                }

          ?>
  </body>
</html>
