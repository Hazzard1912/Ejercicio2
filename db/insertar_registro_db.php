<?php

include_once 'db.php';

function insertarRegistro($nombrearchivo, $cantlineas, $cantpalabras, $cantcaracteres)
{
  $conexion = conectarDB();

  $query = "INSERT INTO informacion (nombrearchivo, cantlineas, cantpalabras, cantcaracteres) VALUES (?,?,?,?) ";

  try {

    $stmt = $conexion->prepare($query);
    $stmt->bindParam(1, $nombrearchivo);
    $stmt->bindParam(2, $cantlineas);
    $stmt->bindParam(3, $cantpalabras);
    $stmt->bindParam(4, $cantcaracteres);
    $stmt->execute();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
