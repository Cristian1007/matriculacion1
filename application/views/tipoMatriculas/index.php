<legend class="text-center">
  <br>
  <i class="glyphicon glyphicon-education"></i>
  <b>TIPO DE MATRICULA</b>
  <br>
</legend>
<form id="frm_index_tipoMatriculas"class="" action=" <?php echo site_url('tipomatriculas/guardartipo'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TIPO DE MATRÍCULA: </label>
    </div>
    <div class="col-md-7">
      <select class="form-control" name="tipoMatricula_ti">
        <option>---seleccione tipo de matricula---</option>
      <option>Ordinaria</option>
      <option>Extraordinaria</option>
      <option> Especial</option>
      <option>Anulada</option>


      </select>

    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE: </label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_ti" name="nombre_ti" value="" class="form-control" placeholder="ingrese el nombre">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">OBSERVACIONES: </label>
    </div>
    <div class="col-md-7">
      <input type="text" id="observaciones_ti" name="observaciones_ti" value="" class="form-control" placeholder="Ingrese de observaciones">
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">ESTADO: </label>

</select>
    </div>
    <div class="col-md-7">
      <select class="form-control" id="estado_ti" name="estado_ti">
        <option>----Seleccione su estado----</option>
      <option>Activo</option>
      <option>Inactivo</option>

      </select>
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
    <!-- etiqueta a link -->
    <a href="<?php echo site_url('estudiantes/tipoMatricula'); ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-remove"></i>
      Cancelar
    </a>
  </div>
</div>



</form>

<script type="text/javascript">
     $("#frm_index_tipoMatriculas").validate({
        rules:{
            nombre_ti:{
              required:true,
              minlength:3
            },
            observaciones_ti:{
              required:true,
              minlength:10,
            }
        },
        messages:{
            nombre_ti:{
              required:"Por favor ingrese sus nombre",
              minlength:"Nombre incorrecto"
            },
            observaciones_ti:{
              required:"Por favor ingrese la observacion",
              minlength:"Incorrecto",

            },
            estado_ti:{
              required:"Por favor ingrese el estado"
            }

        }
     });
</script>
