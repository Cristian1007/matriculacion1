<h1 class="text-center"> <b>Matricula nueva </b> </h1>
<center>
  <a href="<?php echo site_url('matriculas/index') ?>" class="btn btn-primary"> Volver</a>
  </center>
  <br>
  <form class="" action=" ojo>" method="post">
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Estudiante: </label>
      </div>
      <div class="col-md-7">
        <select class="form-control" name="tipoMatricula_ti">
          <!-- cargar opciones de <select class="" name="">  </select> -->
          <option value="">-------------selecciones el estudiante-----------</option>
          <?php if ($listadoEstudiantes): ?>
            <?php foreach ($listadoEstudiantes->result() as $estudianteTemporal): ?>
              <option value="<?php echo $estudianteTemporal->id_est;?>">
              <?php echo $estudianteTemporal->nombre_est; ?>
              <?php echo $estudianteTemporal->apellido_est; ?>
              </option>

            <?php endforeach; ?>

          <?php endif; ?>

      </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Asignatura: </label>
      </div>
      <div class="col-md-7">
        <select class="form-control" name="fk_id_est" id="fk_id_est" required>
         <!-- cargar opcioness de el select -->
         <option value="">--------seleccione la asignatura----------</option>

         <?php if ($listadoAsignaturas): ?>
           <?php foreach ($listadoAsignaturas->result() as $asignaturaTemporal): ?>
             <option value="<?php echo $asignaturaTemporal->id_asi;?>">
             <?php echo $asignaturaTemporal->materia_asi; ?>
             </option>

           <?php endforeach; ?>

         <?php endif; ?>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">Fecha: </label>
      </div>
      <div class="col-md-7">
        <input type="date" name="" value="" class="form-control" placeholder="ingrese el nombre">
      </div>
    </div>
    <br>
     <div class="row text-center">
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-success">
        <i class="glyphicon glyphicon-ok"></i>
        Guardar
      </button>
      <!-- etiqueta a link -->
      <a href="<?php echo site_url('matriculas/index'); ?>" class="btn btn-warning">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>



  </form>
