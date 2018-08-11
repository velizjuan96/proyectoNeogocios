<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $nombre_empresa= $_POST['nombre_empresa'];
    $direccion= $_POST['direccion'];
    $precio = $_POST['precio'];
    $telefono= $_POST['telefono'];
    $correo = $_POST['correo'];
    $fax = $_POST['fax'];
    $fecha_registro = $_POST['fecha_registro'];

    $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db=$conexion;
    $stmt = $db->prepare("update proveedores set nombre_empresa=:nombre_empresa,direccion=:direccion ,telefono=:telefono,correo=:correo,fax=:fax,fecha_registro=:fecha_registro where id=:id");
    $stmt->bindParam(":nombre_empresa",$nombre_empresa);
    $stmt->bindParam(":direccion",$direccion);
    $stmt->bindParam(":telefono",$telefono);
    $stmt->bindParam(":correo",$correo);
    $stmt->bindParam(":fax",$fax);
    $stmt->bindParam(":fecha_registro",$fecha_registro);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}

?>