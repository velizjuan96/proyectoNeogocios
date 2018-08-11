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

        include '../conexion/conexion.php';

        $sql = "delete  from vendedores where Id = '" . $busca . "'";

        $conexion->exec($sql);

      if ($conexion==true){
          echo "deleted successfully";
      }else{echo "no";}
}
?>