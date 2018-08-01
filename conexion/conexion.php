<?php


$db = new PDO("mysql:host=127.0.0.1;dbname=eladeria","root","");
if ($db==true){

    echo "Conexion";

    }else
{echo "error";}