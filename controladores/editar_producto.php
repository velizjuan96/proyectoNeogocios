<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $fecha_compra = $_POST['fecha_compra'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];

    $conexion = new PDO("mysql:host=127.0.0.1;dbname=eladeria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db=$conexion;
    $stmt = $db->prepare("update producto set producto=:producto,cantidad=:cantidad,precio=:precio ,fecha_compra=:fecha_compra,fecha_vencimiento=:fecha_vencimiento where id=:id");
    $stmt->bindParam(":producto",$producto);
    $stmt->bindParam(":cantidad",$cantidad);
    $stmt->bindParam(":precio",$precio);
    $stmt->bindParam(":fecha_compra",$fecha_compra);
    $stmt->bindParam(":fecha_vencimiento",$fecha_vencimiento);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}

?>