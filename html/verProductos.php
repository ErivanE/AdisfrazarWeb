<?php
include "../php/conexionBD.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TablaProductosVenta</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <caption>Lista de Productos Venta</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Genero</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Precio c/u</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT idProductoVenta, tipo, nombre, talla, genero, cantidad, descripcion, precio FROM productoVenta";
                $result = $conn -> query($query);
    
                if($result -> num_rows > 0){
                    while($row = $result ->fetch_assoc()){
                        echo "<tr>";
                            echo "<td>".$row["idProductoVenta"]."</td>";
                            echo "<td>".$row["tipo"]."</td>"; 
                            echo "<td>".$row["nombre"]."</td>";
                            echo "<td>".$row["talla"]."</td>";
                            echo "<td>".$row["genero"]."</td>"; 
                            echo "<td>".$row["cantidad"]."</td>"; 
                            echo "<td>".$row["descripcion"]."</td>"; 
                            echo "<td>".$row["precio"]."</td>"; 
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>