<?php
/*prueba local*/
/*
$user_db="root";
$pass_db="";
$db_name="Proyecto_Web1";
$host_db="127.0.0.1";
*/
$user_db="if0_36150778";
$pass_db="4fIn2DFCOp9o";
$db_name="if0_36150778_proyecto_web1";
$host_db="sql309.infinityfree.com";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if($conexion-> connect_error){
    die("No jala lol: ".$conexion->connect_error);
}

?>