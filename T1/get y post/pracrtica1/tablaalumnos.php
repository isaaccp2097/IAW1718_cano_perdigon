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
      img {
        width: 20px;
        height: 20px;
      }
      table{

      }
    </style>
  </head>
  <body>

      <form action="editar_alumnos.php">
        <table border="1">

          <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Opciones</td>
          </tr>
          <tr>
            <td name="nombre">Isaac</td>
            <td name="apellidos">Cano Perdigon</td>
            <td name="correo">isaac@hola.es</td>
            <td><a href="editar_alumnos.php?nombre=Isaac?apellidos=Cano?correo=isaac@hola.es"><img src="lapiz.jpeg" alt=""> </a></td>
          </tr>
          <tr>
            <td name="nombre">Samuel</td>
            <td name="apellidos">Cano Perdigon</td>
            <td name="correo">samuel@hola.es</td>
            <td><a href="editar_alumnos.php?nombre=Paco?apellidos=Cano?correo=samuel@hola.es"><img src="lapiz.jpeg" alt=""> </a></td>
          </tr>
          <tr>
            <td name="nombre">Paco</td>
            <td name="apellidos">Rincon Gonzalez</td>
            <td name="correo">paco@hola.es</td>
            <td><a href="editar_alumnos.php?nombre=Paco?apellidos=Rincon?correo=paco@hola.es"><img src="lapiz.jpeg" alt=""> </a></td>
          </tr>

        </table>
      </form>

  </body>
</html>
