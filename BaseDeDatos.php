<?php


$host ='database';
$username ='lamp';
$password ='lamp';
$dbname='lamp';
$connection = new mysqli($host,$username,$password,$dbname);
if($connection->connect_errno){
    echo $connection->connect_error;
    exit();
}

var_dump($connection);


?>                           