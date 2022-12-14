<legend class="text-center">

  <i class="glyphicon glyphicon-book"></i>
  <b>ASIGNATURAS</b>
</legend>
<center>
  <a href="<?php echo site_url('asignaturas/index'); ?>" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i>
    Agregar Nuevo
  </a>
  </center>
  <table class="table table-striped table-bordered table-hover">
    <?php if ($listaAsignaturas): ?>
      <thead>
        <th class="text-center"> ID</th>
        <th class="text-center"> MATERI</th>
        <th class="text-center"> NUMERO DE CREDITOS</th>
        <th class="text-center"> DESCRIPCION</th>
        <th class="text-center"> JORNADA</th>
        <th class="text-center">ACCIONES</th>
      </thead>
      <tbody>
        <?php foreach ($listaAsignaturas->result() as $asignaturaTemporal): ?>
          <tr>
            <td class="text-center"> <?php echo $asignaturaTemporal->id_asi ?></td>
            <td class="text-center"> <?php echo $asignaturaTemporal->materia_asi ?></td>
            <td class="text-center"> <?php echo $asignaturaTemporal->numero_creditos_asi ?></td>
            <td class="text-center"> <?php echo $asignaturaTemporal->descripcion_asi ?></td>
            <td class="text-center"> <?php echo $asignaturaTemporal->jornada_asi ?></td>
            <td class="text-center">
              <a href="<?php echo site_url('asignaturas/actualizar') ?>/<?php echo $asignaturaTemporal->id_asi ?>" class="btn btn-warning">
                <i class="glyphicon glyphicon-edit"></i>
                Editar
              </a>
              <a href="<?php echo site_url('asignaturas/borrar') ?>/<?php echo $asignaturaTemporal->id_asi ?> " class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Eliminar
              </a>
            </td>
          </tr>

        <?php endforeach; ?>
      </tbody>
    <?php else: ?>
      <h3> <b>No existe asignaturas</b> </h3>

    <?php endif; ?>


  </table>
