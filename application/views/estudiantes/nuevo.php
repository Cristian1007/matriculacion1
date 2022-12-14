<legend class="text-center">
  <i class="glyphicon glyphicon-plus"></i>
  <b>Nuevo Estudiante</b>
</legend>
<!-- formulario, get o post -->
<form id="frm_nuevo_estudiante" class=""
enctype="multipart/form-data" 
action="<?php echo site_url('estudiantes/guardarEstudiante'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CÉDULA: </label>
    </div>
    <div class="col-md-7">

      <input type="number" id="cedula_est" name="cedula_est" value="" class="form-control" placeholder="Ingrese el número de cédula">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" id="apellido_est" name="apellido_est" value="" class="form-control" placeholder="Ingrese los dos apellidos">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE: </label>
    </div>
    <div class="col-md-7">
      <input type="text" id="nombre_est" name="nombre_est" value="" class="form-control" placeholder="Ingrese los dos nombres">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELÉFONO: </label>
    </div>
    <div class="col-md-7">
      <input type="number" id="telefono_est" name="telefono_est" value="" class="form-control" placeholder="Ingrese su número de teléfono">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCIÓN: </label>
    </div>
    <div class="col-md-7">
      <input type="text" id="direccion_est" name="direccion_est" value="" class="form-control" placeholder="Ingrese su dirección de domicilio">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">FECHA DE NACIMIENTO: </label>
    </div>
    <div class="col-md-7">
      <input type="date" id="fecha_nacimiento_est" name="fecha_nacimiento_est" value="" class="form-control" placeholder="Ingrese su fecha de nacimiento">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">FOTOGRAFIA: </label>
    </div>
    <div class="col-md-7">
      <input type="file" id="foto_est" name="foto_est" value="" required accept="image/*">
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
      <a href="<?php echo site_url('estudiantes/index'); ?>" class="btn btn-danger">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
      </a>
    </div>
  </div>
</form>

<script type="text/javascript">
     $("#frm_nuevo_estudiante").validate({
        rules:{
            apellido_est:{
              required:true,
              minlength:3
            },
            cedula_est:{
              required:true,
              minlength:10,
              maxlength:10,
              digits:true
            },
            nombre_est:{
              required:true,
              minlength:3
            },
            telefono_est:{
              required:true,
              minlength:10,
              maxlength:10,
              digits:true
            },
            direccion_est:{
              required:true
            },
            fecha_nacimiento_est:{
              required:true
            }
        },
        messages:{
            apellido_est:{
              required:"Por favor complete los apellidos",
              minlength:"Apellido Incorrecto"
            },
            cedula_est:{
              required:"Por favor ingrese la cédula",
              minlength:"Cédula Incorrecta",
              maxlength:"Cédula Incorrecta",
              digits:"Este campo solo acepta números"
            },
            nombre_est:{
              required:"Por favor ingrese sus nombre",
              minlength:"Nombre incorrecto"
            },
            telefono_est:{
              required:"Por favor ingrese su telefono celular",
              minlength:"Telefono incorrecto",
              maxlength:"Telefono incorrecto",
              digits:"Este campo solo acepta números"
            },
            direccion_est:{
              required:"Por favor ingrese la dirección"
            },
            fecha_nacimiento_est:{
              required:"Por favor seleccione la fecha de nacimiento"
            }
        }
     });
</script>
