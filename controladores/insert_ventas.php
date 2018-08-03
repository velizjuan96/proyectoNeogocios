<?php
/**
 * Created by PhpStorm.
 * User: juAN
 * Date: 01/08/2018
 * Time: 13:27
 */

if ($_POST) {
    $producto = $_POST['producto'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $fecha=$_POST['fecha'];


    include '../conexion/conexion.php';

    $query = "INSERT INTO ventas(producto,cantidad,precio,fecha_venta)
        VALUES ('$producto','$cantidad','$precio','$fecha')";


    if ($conexion->query($query) === TRUE) {
        //  echo '<div class="alert alert-success" role="alert">Datos Guardados exitosamente</div>';
        echo "<script type=\"text/javascript\">alert(\"ERROR AL GUARDAR\");</script>";
    } else {
        echo "<script type=\"text/javascript\">alert(\"Informacion Guardada\");</script>";
    }

}
?>