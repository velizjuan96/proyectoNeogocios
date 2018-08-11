<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['mensaje'];


    $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO mensajes(nombre,correo,telefono,comentario)
        VALUES ('$nombre','$correo','$telefono','$comentario')";

    if ($conexion->query($query)==false) {
        //  echo '<div class="alert alert-success" role="alert">Datos Guardados exitosamente</div>';
        echo "<script type=\"text/javascript\">alert(\"ERROR AL GUARDAR\");</script>";
    } else {
        echo "<script type=\"text/javascript\">alert(\"Informacion Guardada\");</script>";
    }

}
?>