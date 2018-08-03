<?php
/**
 * Created by PhpStorm.
 * User: juAN
 * Date: 10/07/2018
 * Time: 23:55
 */
//$busca="";
if ($_POST) {

    $busca = $_POST['id'];

    try {

        include '../conexion/conexion.php';

        $sql = "delete  from ventas where Id = '" . $busca . "'";

        // use exec() because no results are returned
        $conexion->exec($sql);
        echo "R deleted successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}