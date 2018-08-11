<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono= $_POST['telefono'];
    $correo = $_POST['correo'];
    $fax= $_POST['fax'];
    $fecha_registro = $_POST['fecha_registro'];
//    $descripcion = $_POST['descripcion'];

    include '../conexion/conexion.php';

    $query = "INSERT INTO proveedores(nombre_empresa,direccion,telefono,correo,fax,fecha_registro)
        VALUES ('$nombre','$direccion','$telefono','$correo','$fax','$fecha_registro')";

    if ($conexion->query($query)==false) {
        //  echo '<div class="alert alert-success" role="alert">Datos Guardados exitosamente</div>';
        echo "<script type=\"text/javascript\">alert(\"ERROR AL GUARDAR\");</script>";
    } else {
        echo "<script type=\"text/javascript\">alert(\"Informacion Guardada\");</script>";
    }
}
?>