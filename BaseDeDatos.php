<?php


$host ='database';
$username ='root';
$password ='';
$dbname='ProyectoMarco';

$conection = new mysqli($host,$username,$password,$dbname);
if(!$conection){
echo "error en la conexion";
}



?>                           