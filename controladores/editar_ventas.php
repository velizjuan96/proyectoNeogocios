<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];

    $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db=$conexion;
    $stmt = $db->prepare("update ventas set producto=:producto,cantidad=:cantidad,precio=:precio ,fecha_venta=:fecha where id=:id");
    $stmt->bindParam(":producto",$producto);
    $stmt->bindParam(":cantidad",$cantidad);
    $stmt->bindParam(":precio",$precio);
    $stmt->bindParam(":fecha",$fecha);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}
?>