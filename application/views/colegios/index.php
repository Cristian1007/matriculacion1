<legend class="text-center">
  <i class=" glyphicon glyphicon-user"></i>
   <b>Lidtado Colegios</b>
</legend>
<center>
  <a href="<?php echo site_url('colegios/nuevo') ?>" class="btn btn-success">
  <i class="glyphicon glyphicon-plus"></i>
  Agregar
  </a>
</center>
<hr>
<?php if ($listadoColegio): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <th class="text-center">ID</th>
      <th class="text-center">NOMBRE</th>
      <th class="text-center">DIRECCION</th>
      <th class="text-center">TELEFONO</th>
      <th class="text-center">DISTRITO</th>
    </thead>
    <tbody>
      <?php foreach ($listadoColegio->result() as $colegioTemporal): ?>
        <tr>
          <td class="text-center"><?php echo $colegioTemporal->id_crt ?></td>
          <td class="text-center"><?php echo $colegioTemporal->nombre_crt ?></td>
          <td class="text-center"><?php echo $colegioTemporal->direccion_crt ?></td>
          <td class="text-center"><?php echo $colegioTemporal->telefono_crt ?></td>
          <td class="text-center"><?php echo $colegioTemporal->distrito_crt ?></td>
          <td class="text-center">
            <a href="<?php echo site_url('Colegios/actualizar'); ?>/<?php echo $colegioTemporal->id_crt ?>" class="btn btn-warning">
              <i class="glyphicon glyphicon-edit"></i>
              Editar
            </a>
            <a href="<?php echo site_url('Colegios/borrar'); ?>/<?php echo $colegioTemporal->id_crt ?>" class="btn btn-danger">
              <i class="glyphicon glyphicon-trash"></i>
              Eliminar
            </a>
          </td>
        </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

<?php endif; ?>
