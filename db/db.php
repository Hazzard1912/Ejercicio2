<?php

function conectarDB()
{

  $host = "localhost";
  $database = "datosdb";
  $username = "admin";
  $password = "admin";

  try {

    $conexion = new PDO("pgsql:host=$host;dbname=$database;user=$username;password=$password");

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conexion;
  } catch (PDOException $e) {

    die("Error de conexión: " . $e->getMessage());
  }
}
