<?php

$conexion=new PDO("mysqli:host=localhost;dbname=eladeria","root","");

if ($conexion==true){

    echo "Conexion";

    }else echo "no co";