<legend class="text-center">
  <i class="glyphicon glyphicon-plus">  </i>
  <b>COLEGIOS </b>
</legend>
<form class="" action="<?php echo site_url('colegios/guardarColegios'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_crt" value="" class="form-control" placeholder="Ingrese el nombre del colegio" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCION: </label>
    </div>
    <div class="col-md-7"> 
      <input type="text" name="direccion_crt" value="" class="form-control" placeholder="Ingrese la dirección" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="telefono_crt" value="" class="form-control" placeholder="Ingrese el telefono " required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DISTRITO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="distrito_crt" value="" class="form-control" placeholder="Ingrese el nombre del colegio" required>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary">
      <i class="glyphicon glyphicon-ok"></i>
      Guardar
      </button>
      <a href="<?php echo site_url('colegios/nuevo'); ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-remove"></i>
      Cancelar
      </a>
    </div>

  </div>


</form>
