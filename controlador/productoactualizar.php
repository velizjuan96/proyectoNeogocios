<?php
include('../modelo/conexion.php');
$id=$_POST["id"];
$codigo=$_POST["codigo"];
$codigo_barra=$_POST["codigo_barra"];
$descripcion=$_POST["descripcion"];
$proveedor=$_POST["proveedor"];
$familia=$_POST["familia"];
$marca=$_POST["marca"];
$impuesto=$_POST["impuesto"];
$unidades=$_POST["unidades"];
$descuento=$_POST["descuento"];
$costo_fijo=$_POST["costo_fijo"];
$costo_variable=$_POST["costo_variable"];
$utilidad=$_POST["utilidad"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$estado=$_POST["estado"];

try {
  $db=conexion("root","","sistema");
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $fecha=date('y-m-d H:i:s');
  $stmt = $db->prepare("update producto set codigo=:codigo,codigo_barra=:codigo_barra,descripcion=:descripcion,
  proveedor=:proveedor,familia=:familia,marca=:marca,impuesto=:impuesto,unidades=:unidades,descuento=:descuento,costo_fijo=:costo_fijo,
  costo_variable=:costo_variable,utilidad=:utilidad,precio=:precio,cantidad=:cantidad,estado=:estado,fecha_modificacion=:fecha  where id=:id");

  $stmt->bindParam(":codigo",$codigo);
  $stmt->bindParam(":codigo_barra",$codigo_barra);
  $stmt->bindParam(":descripcion",$descripcion);
  $stmt->bindParam(":proveedor",$proveedor);
  $stmt->bindParam(":familia",$familia);
  $stmt->bindParam(":marca",$marca);
  $stmt->bindParam(":impuesto",$impuesto);
  $stmt->bindParam(":unidades",$unidades);
  $stmt->bindParam(":descuento",$descuento);
  $stmt->bindParam(":costo_fijo",$costo_fijo);
  $stmt->bindParam(":costo_variable",$costo_variable);
  $stmt->bindParam(":utilidad",$utilidad);
  $stmt->bindParam(":precio",$precio);
  $stmt->bindParam(":cantidad",$cantidad);
  $stmt->bindParam(":estado",$estado);
  $stmt->bindParam(":fecha",$fecha);
  $stmt->bindParam(":id",$id);
  $stmt->execute();

  echo "Ok";
} catch (\Exception $e) {
  echo $e->getMessage();
}

 ?>
