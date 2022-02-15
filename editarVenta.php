<?php 
//print_r($_GET);
if (!isset($_GET ['oculto'])) {
    	header('Location: Ventas.php');
    }

    include 'conexion.php';
    $id = $_GET ['id'];
    $idProducto = $_GET['idProducto'];
    $idCliente = $_GET['idCliente'];
    $idVendedor = $_GET['idCliente'];
    $Fecha =  $_GET['fecha'];
    $Cantidad =  $_GET['cantidad'];
    $Precio =  $_GET['Precio'];

    $sentencia = $bd->prepare("UPDATE venta SET idProducto = ?, idCliente = ?, idCliente = ?, fecha = ?,cantidad = ?, Precio = ? WHERE id = ?;");

    $resultado = $sentencia->execute([$idProducto,$idCliente,$idVendedor,$Fecha,$Cantidad,$Precio,$id]);

 if ($resultado == TRUE){
    	//echo 'Insertado Correctamente';
    	header('Location:Ventas.php');
    }else {
    	echo 'Error';
    }


    
 ?>