<?php
include "conexionBD.php";

$idProductoVenta = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$genero = $_POST['genero'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

//FUNCIONES
//agregar
if(isset($_POST['agregarProductoVenta'])){
    $query = $conn -> query("INSERT INTO 
        productoventa(idProductoVenta, 
            nombre, 
            tipo, 
            talla, 
            genero, 
            cantidad, 
            descripcion, 
            precio) 
        VALUES(0, 
            '$nombre',
            '$tipo',
            '$talla',
            '$genero',
            '$cantidad',
            '$descripcion',
            '$precio'
            )");
    header("location: ../index.html");
}
//modificar

//ver

//eliminar
?>