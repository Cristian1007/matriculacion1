<legend class="text-center">
  <!-- gestion de estudiantes -->
  <i class="glyphicon glyphicon-user"></i>
<b>  Gestion de Estudiantes</b><br>
<br>

</legend>
<center>
  <a href="<?php echo site_url('estudiantes/nuevo'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i>
    Agregar Nuevo
  </a>
</center>b
<hr>
<?php if ($listadoEstudiantes): ?>
  <table id="tbl-estudiantes" class="table table-striped table-bordered table-hover">
    <thead>
      <th class="text-center"> ID</th>
      <th class="text-center"> CEDULA</th>
      <th class="text-center"> APELLIDO</th>
      <th class="text-center"> NOMBRE</th>
      <th class="text-center"> TELEFONO</th>
      <th class="text-center"> DIRECCION</th>
      <th class="text-center"> FECHA DE NACIMIENTO</th>
      <th class="text-center"> FOTO</th>
      <th class="text-center">ACCIONES</th>
    </thead>

      <tbody>
      <!-- $listadoClientes->result() as $clienteTemporal -->
      <?php foreach ($listadoEstudiantes->result() as $estudianteTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $estudianteTemporal->id_est; ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->cedula_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->apellido_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->nombre_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->telefono_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->direccion_est ?></td>
          <td class="text-center"><?php echo $estudianteTemporal->fecha_nacimiento_est ?></td>
          <td class="text-center"><?php if ($estudianteTemporal->foto_est!=""): ?>
                    <a href="<?php echo base_url('uploads/estudiantes').'/'.$estudianteTemporal->foto_est; ?>"
                      target="_blank">
                      <img src="<?php echo base_url('uploads/estudiantes').'/'.$estudianteTemporal->foto_est; ?>"
                      width="50px" height="50px"
                      alt="">
                    </a>
                  <?php else: ?>
                    N/A
                  <?php endif; ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('estudiantes/actualizar'); ?>/<?php echo $estudianteTemporal->id_est ?>" class="btn btn-warning">
              <i class="glyphicon glyphicon-edit"></i>
              Editar
            </a>
            <a href="<?php echo site_url('estudiantes/borrar'); ?>/<?php echo $estudianteTemporal->id_est ?>" class="btn btn-danger" onclick="return confirm('esta seguro de eliminar?');">
              <i class="glyphicon glyphicon-trash"></i>
              Eliminar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
<?php else: ?>
  <h3><b>No existen estudiantes</b></h3>
<?php endif; ?>

<script type="text/javascript">
  $("#tbl-estudiantes").DataTable();
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
