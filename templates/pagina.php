<?php
require './model/registros.php';
$registros = new Registros();
?>

<h1 class="text-center p-4">Prueba Tecnica PHP</h1>
<?php include './forms/form_cargar_archivo.php'; ?>

<hr>

<div class="col-sm-10 mx-auto my-4">

  <div class="table-responsive">
    <table id="registros" class="table table-striped table-bordered">
      <thead>
        <th>
          <div class="text-center">Código</div>
        </th>
        <th>
          <div class="text-center">Nombre Archivo</div>
        </th>
        <th>
          <div class="text-center">Número de Lineas</div>
        </th>
        <th>
          <div class="text-center">Número de Palabras</div>
        </th>
        <th>
          <div class="text-center">Número de caracteres</div>
        </th>
        <th>
          <div class="text-center">Fecha de Registro</div>
        </th>
      </thead>
      <tbody>
        <?php
        $respuesta = $registros->viewRegistros();
        foreach ($respuesta as $registro) {
        ?>
          <tr>
            <td>
              <div class="text-center">
                <?php echo $registro['codigo']; ?></div>
            </td>
            <td>
              <div class="text-center">
                <?php echo $registro['nombrearchivo']; ?>
              </div>
            </td>
            <td>
              <div class="text-center">
                <?php echo $registro['cantlineas']; ?>
              </div>
            </td>
            <td>
              <div class="text-center">
                <?php echo $registro['cantpalabras']; ?>
              </div>
            </td>
            <td>
              <div class="text-center">
                <?php echo $registro['cantcaracteres']; ?>
              </div>
            </td>
            <td>
              <div class="text-center">
                <?php echo $registro['fecharegistro']; ?>
              </div>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<a href="generar_pdf.php" target="_blank">Descargar PDF</a>

<script>
  new DataTable('#registros', {
    pagingType: 'full_numbers'
  });
</script>