<?php

include_once './db/db.php';

class Registros
{

  function viewRegistros()
  {
    $conexion = conectarDB();
    $arreglo = array();
    $consulta = "SELECT codigo,
                            nombrearchivo,
                            cantlineas,
                            cantpalabras,
                            cantcaracteres,
                            fecharegistro
                    FROM informacion
                    ORDER BY codigo ASC";
    $modules = $conexion->prepare($consulta);
    $modules->execute();
    $total = $modules->rowCount();
    if ($total > 0) {
      $i = 0;
      while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
        $arreglo[$i] = $data;
        $i++;
      }
    }
    return $arreglo;
  }
}
