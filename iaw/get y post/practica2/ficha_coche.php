<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      img {
        width: 200px;
        height: 200px;
        margin-left: 35%;
        margin-top: -18%;

      }
      table{
        margin-left: 2px;
        margin-top: 16px;
      }
    </style>
  </head>
  <body>
    <table >
      <tr>
        <td><b>MATRICULA:</b>  <?php echo $_GET['matricula'] ?></td>

      </tr>
      <tr>
        <td><b>Kilometro:</b>  <?php echo $_GET['kilometro'] ?></td>
      </tr>
      <tr>
        <td><b>Fecha_Mat:</b>  <?php echo $_GET['fecha_mat'] ?></td>
      </tr>
      <tr>
        <td><b>Marca:</b>  <?php echo $_GET['marca'] ?></td>
      </tr>
      <tr>
        <td><b>Modelo:</b>  <?php echo $_GET['modelo'] ?></td>
      </tr>
    </table>
    <?php
      //var_dump($_GET);
     ?>
     <img src="coche.jpg" alt="">
  </body>
</html>
