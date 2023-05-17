<?php
  function conectar() {
    $host = "localhost:8889";
    $user = "root";
    $pass = "root";
    $db = "Directorio3C";
    $conexion = mysqli_connect($host, $user, $pass);
    mysqli_select_db($conexion, $db);
    return $conexion;
  }
?>