<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $identidad=$_POST['identidad'];
    $telefono=$_POST['telefono'];
    $sexo=$_POST['sexo'];
    $fecha_registro=$_POST['fecha_registro'];

    $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db=$conexion;
    $stmt = $db->prepare("update cliente set nombre=:nombre,apellido=:apellido,identidad=:identidad,telefono=:telefono,sexo=:sexo,fecha_registro=:fecha_registro where id=:id");
    $stmt->bindParam(":nombre",$nombre);
    $stmt->bindParam(":apellido",$apellido);
    $stmt->bindParam(":identidad",$identidad);
    $stmt->bindParam(":telefono",$telefono);
    $stmt->bindParam(":sexo",$sexo);
    $stmt->bindParam(":fecha_registro",$fecha_registro);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}

?>