<?php 

$servename = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servename, $username, $password, $db_name);

if(mysqli_connect_error()){
    echo "falha ao conectar". mysqli_connect_error;
}
?>