<legend class="text-center">
  <i class="glyphicon glyphicon-list-alt"></i>
  <b>TIPO DE MATRICULA</b>
</legend>
<center>
  <a href="<?php echo site_url('tipoMatriculas/index'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i>
    Agregar Nuevo
  </a>
</center>
<hr>
<?php if ($listaTipo): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <th class="text-center">ID</th>
      <th class="text-center">TIPO MATRICULA</th>
      <th class="text-center">NOMBRE</th>
      <th class="text-center">OBSERVACIONES</th>
      <th class="text-center">ESTADO</th>
      <th class="text-center">ACCIONES</th>

    </thead>
    <tbody>
      <?php foreach ($listaTipo->result() as $tipoTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $tipoTemporal->id_ti ?></td>
          <td class="text-center"><?php echo $tipoTemporal->tipoMatricula_ti ?></td>
          <td class="text-center"><?php echo $tipoTemporal->nombre_ti ?></td>
          <td class="text-center"><?php echo $tipoTemporal->observaciones_ti ?></td>
          <td class="text-center"><?php echo $tipoTemporal->estado_ti ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('tipoMatriculas/actualizar'); ?>/<?php echo $tipoTemporal->id_ti ?>" class="btn btn-warning">
            <i class="glyphicon glyphicon-edit"></i>
            Editar
            </a>
            <a href="<?php echo site_url('tipoMatriculas/borrar'); ?>/<?php echo $tipoTemporal->id_ti ?>" class="btn btn-danger">
              <i class="glyphicon glyphicon-trash"> </i>
              Eliminar
            </a>
          </td>

        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

<?php else: ?>

<?php endif; ?>
