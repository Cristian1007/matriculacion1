<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR ASIGNATURA</h3>
  </div>
  <center>
    <a href="<?php echo site_url('asignaturas/nuevo'); ?>" class="btn btn-warning">
      <i class="glyphicon glyphicon-arrow-left"></i>
      Volver
    </a>
  </center>
  <br>
  <div class="row">
    <div class="col-md-12">
      <?php if ($asignaturaEditar): ?>
        <!-- <?php print_r($asignaturaEditar); ?> -->
        <form class="" action="<?php echo site_url('asignaturas/actualizarAsignatura'); ?>" method="post">
          <center>
            <input type="hidden" name="id_asi" value="<?php echo $asignaturaEditar->id_asi; ?>" class=" text-center" placeholder="Ingrese el número de cédula" required>
          </center>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">MATERIA: </label>
            </div>
            <div class="col-md-7">
              <input type="text" name="materia_asi" value="<?php echo $asignaturaEditar->materia_asi; ?>" class="form-control" placeholder="Ingrese el nombre de la materia">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">NÚMERO DE CREDITOS: </label>
            </div>
            <div class="col-md-7">
              <input type="number" name="numero_creditos_asi" value="<?php echo $asignaturaEditar->numero_creditos_asi; ?>" class="form-control" placeholder="Ingrese el número de creditos">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">DESCRIPCIÓN: </label>
            </div>
            <div class="col-md-7">
              <input type="text" name="descripcion_asi" value="<?php echo $asignaturaEditar->descripcion_asi; ?>" class="form-control" placeholder="Describa la materia">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-right">
              <label for="">JORNADA: </label>
            </div>

            <div class="row" >
              <div class="col-md-7">
                <input type="text" name="jornada_asi" value="<?php echo $asignaturaEditar->jornada_asi; ?>" class="form-control" placeholder="Describa la materia">
              </div>

            </div>

          </div>
          <br>
        <br>
        <br>
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
              <a href="<?php echo site_url('asignaturas/nuevo'); ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-remove"></i>
                Cancelar
              </a>
            </div>
          </div>


        </form>

      <?php else: ?>
        <div class="alert alert-danger">
          <b>No se encontro al estudiante</b>

        </div>

      <?php endif; ?>

    </div>

  </div>

</div>
