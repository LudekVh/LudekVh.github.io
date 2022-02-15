<?php
    if(!isset($_GET['oculto'])) {
       exit();
    }

    include 'conexion.php';
    $idProducto = $_GET['idProducto'];
    $idCliente = $_GET['idCliente'];
    $idVendedor = $_GET['idVendedor'];
    $Fecha =  $_GET['fecha'];
    $Cantidad =  $_GET['cantidad'];
    $Precio =  $_GET['Precio'];

    $sentencia = $bd->prepare("INSERT INTO venta (idProducto,idCliente,idVendedor,fecha,cantidad,Precio) VALUES (?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$idProducto,$idCliente,$idVendedor,$Fecha,$Cantidad,$Precio]);

    if ($resultado == TRUE){
    	//echo 'Insertado Correctamente';
    	header('Location:Ventas.php');
    }else {
    	echo 'Error';
    }


?>