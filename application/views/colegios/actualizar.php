<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR COLEGIO</h3>
  </div>
  <center>
    <a href="<?php echo site_url('colegios/index'); ?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-arrow-left"></i>
      Volver
    </a>
  </center>
  <br>
  <div class="row">
    <div class="col-md-12">
      <!-- <?php print_r($colegioEditar); ?> -->
      <?php if ($colegioEditar): ?>
        <form class="" action="<?php echo site_url('colegios/procesarActualizacion'); ?>" method="post">
          <center>
          <input type="hidden" name="id_crt" value="<?php echo $colegioEditar->id_crt ?>">
        </center>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_crt" value="<?php echo $colegioEditar->nombre_crt ?>" class="form-control" placeholder="Ingrese el nombre del colegio" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCION: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="direccion_crt" value="<?php echo $colegioEditar->direccion_crt ?>" class="form-control" placeholder="Ingrese la dirección" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="telefono_crt" value="<?php echo $colegioEditar->telefono_crt ?>" class="form-control" placeholder="Ingrese el telefono " required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DISTRITO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="distrito_crt" value="<?php echo $colegioEditar->distrito_crt ?>" class="form-control" placeholder="Ingrese el nombre del colegio" required>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-warning">
      <i class="glyphicon glyphicon-refresh"></i>
      Actualizar
      </button>
      <a href="<?php echo site_url('colegios/index'); ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-remove"></i>
      Cancelar
      </a>
    </div>

  </div>


</form>

      <?php else: ?>

      <?php endif; ?>

    </div>

  </div>
