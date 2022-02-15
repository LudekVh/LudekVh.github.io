<?php 
	if (!isset($_GET['id'])) {
    	exit();
    }

    $codigo = $_GET['id'];
    include 'conexion.php';
    $sentencia = $bd->prepare("DELETE FROM vendedor WHERE id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado == TRUE){
    	//echo 'Insertado Correctamente';
    	header('Location:Vendedor.php');
    }else {
    	echo 'Error';
    }




?>
