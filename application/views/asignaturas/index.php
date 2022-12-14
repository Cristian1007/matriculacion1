<legend class="text-center">
  <br>
  <i class="glyphicon glyphicon-education"></i>
  <b>ASIGNATURAS</b>
  <br>
</legend>
<form class="" action="<?php echo site_url('asignaturas/guardarAsignatura'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">MATERIA: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="materia_asi" value="" class="form-control" placeholder="Ingrese el nombre de la materia">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NÚMERO DE CREDITOS: </label>
    </div>
    <div class="col-md-7">
      <input type="number" name="numero_creditos_asi" value="" class="form-control" placeholder="Ingrese el número de creditos">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DESCRIPCIÓN: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="descripcion_asi" value="" class="form-control" placeholder="Describa la materia">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">JORNADA: </label>
    </div>

    <div class="col-md-7" >
      <select class="form-control" name="jornada_asi">
        <option>---seleccione una jornada--- </option>
      <option>Matutina</option>
      <option>Vespertina</option>
      <option> Nocturna</option>
      </select>

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
      <button type="submit" name="button" class="btn btn-primary">
        <i class="glyphicon glyphicon-ok"></i>
        Guardar
      </button>
      <!-- etiqueta a link -->
      <a href="<?php echo site_url('estudiantes/asignatura'); ?>" class="btn btn-danger">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>


</form>

<br>
