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
    header("location: ../html/crudProductosVenta.html");
}else 
//modificar
if(isset ($_POST['modificarProductoVenta'])){
    $consulta = $conn -> query("UPDATE productoventa
                    SET nombre = '$nombre',
                    tipo = '$tipo',
                    talla = '$talla',
                    genero = '$genero',
                    cantidad = '$cantidad',
                    descripcion = '$descripcion',
                    precio = '$precio'
                    WHERE idProductoVenta = '$idProductoVenta'");
    header("location: ../html/crudProductosVenta.html");
}else
//ver
//eliminar
if(isset($_POST['eliminarProductoVenta'])){
    $indice = $_POST['id'];
    $consulta = $conn -> query("DELETE FROM productoventa WHERE idProductoVenta = '$indice'");
    header("location: ../html/crudProductosVenta.html");
}
?>