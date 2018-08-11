<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $identidad=$_POST['identidad'];
    $telefono=$_POST['telefono'];
    $sexo=$_POST['sexo'];
    $fecha=$_POST['fecha'];

}else{
    echo "";
}
    include '../conexion/conexion.php';

    $query = "INSERT INTO vendedores(nombre,apellido,identidad,telefono,sexo,fecha_contratacion)
        VALUES ('$nombre','$apellido','$identidad','$telefono','$sexo','$fecha')";

    if ($conexion->query($query) === TRUE) {
        //  echo '<div class="alert alert-success" role="alert">Datos Guardados exitosamente</div>';
        echo "<script type=\"text/javascript\">alert(\"ERROR AL GUARDAR\");</script>";
    } else {
        echo "<script type=\"text/javascript\">alert(\"Informacion Guardada\");</script>";
    }


?>