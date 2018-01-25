<div class="row" id="encabezado">
  <div class="col-md-4" id="logo">
      <a href="inicio.php"><img src="../../img/prueba1.png" class="img-fluid" alt="Responsive image"></a>
  </div>
  <div class="col-md-5" id="inicio">
          <?php
          if (isset($_SESSION["user"])) {
          echo "<h4 id='nusu'>Estas logueado como: $_SESSION[user]</h4>";
        } else {
          echo "<h4 id='nusu'>No ha iniciado sesion</h4>";
        }
        ?>
  </div>


  <div class="col-md-3" id="inicio">
      <td><a href="registro.php"><button type="button" class="btn btn-danger" id='boton'>
      SING IN</button></a></td>
      <td><a href="login.php"><button type="button" class="btn btn-danger" id='boton'>
      LOG IN</button></a></td>
  </div>

</div>
<div class="row" id="menu">
  <div class="col-md-3" id="inicio">
        <a href="mapa.php"><button type="button" id="item" class="btn btn-warning">Mapa
        </button></a>
  </div>
  <div class="col-md-3" id="inicio">
        <a href="lugares.php"><button type="button" id="item" class="btn btn-warning">Lugares
        </button></a>
  </div>
  <div class="col-md-3" id="inicio">
        <a href="missitios.php"><button type="button" id="item" class="btn btn-warning">Mis sitios
        </button></a>
  </div>
  <div class="col-md-3" id="inicio">
        <a href="contactanos.php"><button type="button" id="item" class="btn btn-warning">Contactanos
        </button></a>
  </div>
</div>
