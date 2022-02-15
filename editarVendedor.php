<?php 
//print_r($_GET);
if (!isset($_GET ['oculto'])) {
    	header('Location: Vendedor.php');
    }

    include 'conexion.php';
    $id = $_GET ['id'];
    $Nombre = $_GET['nombre'];
    $Correo = $_GET ['correo'];
    $Direccion = $_GET ['direcion'];
    $Telefono = $_GET ['telefono'];

    $sentencia = $bd->prepare("UPDATE vendedor SET nombre = ?, correo = ?, direcion = ?, telefono = ? WHERE id = ?;");

    $resultado = $sentencia->execute([$Nombre,$Correo,$Direccion,$Telefono,$id]);

 if ($resultado == TRUE){
    	//echo 'Insertado Correctamente';
    	header('Location:Vendedor.php');
    }else {
    	echo 'Error';
    }


    
 ?>