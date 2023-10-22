<?php

include_once './db/insertar_registro_db.php';

function procesarArchivoTexto($nombreArchivo)
{

  $nombrearchivo = $nombreArchivo['name'];
  $archivo = $nombreArchivo['tmp_name'];

  if (!file_exists($nombreArchivo['tmp_name'])) return;

  $contenido = file_get_contents($archivo);

  $cantlineas = count(explode("\n", $contenido));

  $cantpalabras = str_word_count($contenido);

  $cantcaracteres = strlen($contenido);

  insertarRegistro($nombrearchivo, $cantlineas, $cantpalabras, $cantcaracteres);
}
