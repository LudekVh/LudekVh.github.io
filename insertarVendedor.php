<?php
    if(!isset($_GET['oculto'])) {
       exit();
    }

    include 'conexion.php';
    $Nombre = $_GET['nombre'];
    $Correo =  $_GET['correo'];
    $Direccion =  $_GET['direcion'];
    $Telefono =  $_GET['telefono'];

    $sentencia = $bd->prepare("INSERT INTO vendedor (nombre,correo,direcion,telefono) VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$Nombre,$Correo,$Direccion,$Telefono]);

    if ($resultado == TRUE){
    	//echo 'Insertado Correctamente';
    	header('Location:Vendedor.php');
    }else {
    	echo 'Error';
    }



?>