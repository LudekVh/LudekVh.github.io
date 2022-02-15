<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('Location:index.php');
}
if($_SERVER['REQUEST_METHOD']=='GET'){
	$usuario = $_GET['usuario'];
	$password = $_GET['password'];
	//echo "".$usuario .$password . $password2;
	$errores='';
	if(empty($usuario) or empty($password)){
		$errores = '<li> Por favor rellena los campos </li>';
	}
	else{
		$conexion = mysqli_connect('localhost', 'root', 'Jair2002', 'frapes');
        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password='$password';";

		if($resultado = $conexion->query($sql)){
			while($fila = $resultado->fetch_array()){
				header('Location:../Proyecto APWB Software/index.html');
			}//fin del while
		}// fin del if
         
	} //fin del else
   
}//fin del if

require 'vistas/login.vista.php';
?>