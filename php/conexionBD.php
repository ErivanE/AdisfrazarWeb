<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adisfrazar";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn -> connect_error){
    die("La conexion fallo: ".$conn->connect_error);
}
?>