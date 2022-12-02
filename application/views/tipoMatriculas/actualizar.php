<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR MATRICULA</h3>
  </div>
  <center>
    <a href="<?php echo site_url('tipoMatriculas/index'); ?>" class="btn btn-primary">
      <i class="glyphicon glyphicon-arrow-left"></i>
      Volver
    </a>
  </center>}
  <div class="row">
    <div class="col-md-12">

      <?php if ($matriculaEditada): ?>
        <!-- <?php print_r($matriculaEditada) ?> -->
        <form class="" action=" <?php echo site_url('tipomatriculas/procesarActualizacion'); ?>" method="post">
          <div class="row">
            <center>
              <input type="hidden" name="id_ti" value="<?php echo $matriculaEditada->id_ti ?>">
            </center>
            <div class="col-md-4 text-right">
              <label for="">TIPO DE MATRÍCULA: </label>
            </div>
            <div class="col-md-7">
              <input type="text" class="form-control" name="tipoMatricula_ti" value="<?php echo $matriculaEditada->tipoMatricula_ti ?>">

            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">NOMBRE: </label>
            </div>
            <div class="col-md-7">
              <input type="text" name="nombre_ti" value="<?php echo $matriculaEditada->nombre_ti ?>" class="form-control" placeholder="ingrese el nombre">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">OBSERVACIONES: </label>
            </div>
            <div class="col-md-7">
              <input type="text" name="observaciones_ti" value="<?php echo $matriculaEditada->observaciones_ti ?>" class="form-control" placeholder="Ingrese de observaciones">
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">ESTADO: </label>


            </div>
            <div class="col-md-7">
              <input type="text" name="estado_ti" class="form-control" value="<?php echo $matriculaEditada->estado_ti ?>">


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
            <!-- etiqueta a link -->
            <a href="<?php echo site_url('tipoMatriculas/nuevo'); ?>" class="btn btn-danger">
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
