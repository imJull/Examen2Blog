<?php


    if (!isset($_POST['titulo']) || $_POST['contenidopost'] == '') {
      // code...

      header('Location: publicacion.php?error=1');
      die();
    }

    if (!isset($_POST['contenidopost']) || $_POST['contenidopost'] == '') {
      // code.

      header('Location: publicacion.php?error=1');
      die();
    }





    $conexion = new mysqli("localhost", "root", "", "blog");

    if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (".$conexion->connect_errno.")".
      $conexion->connect_error;
    }

    $titulo = $_POST['titulo'];
    $contenidopost = $_POST['contenidopost'];


    $conexion->query(
      "INSERT INTO blogcito (titulo, contenidopost)".
      "VALUES ('$titulo', '$contenidopost')"
    );
    echo $mysqli->host_info . "\n";

    header('Location: index.php?success=1');
    die();
?>
