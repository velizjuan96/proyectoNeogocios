<?php

if ($_POST) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha_compra = $_POST['fecha_compra'];
    $fecha_vencimiento= $_POST['fecha_vencimiento'];

    include '../conexion/conexion.php';

    $query = "INSERT INTO producto(producto,precio,cantidad,fecha_compra,fecha_vencimiento)
        VALUES ('$producto','$precio','$cantidad','$fecha_compra','$fecha_vencimiento')";

    if ($conexion->query($query)==false) {
        //  echo '<div class="alert alert-success" role="alert">Datos Guardados exitosamente</div>';
        echo "<script type=\"text/javascript\">alert(\"ERROR AL GUARDAR\");</script>";
    } else {
        echo "<script type=\"text/javascript\">alert(\"Informacion Guardada\");</script>";
    }
}
?>