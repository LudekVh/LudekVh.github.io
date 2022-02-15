<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('Location:index.php');
}
if($_SERVER['REQUEST_METHOD']=='GET'){
	$usuario = $_GET['usuario'];
	$password = $_GET['password'];
	$password2 = $_GET['password2'];
	//echo "".$usuario .$password . $password2;
	$errores='';
	if(empty($usuario) or empty($password) or empty($password2)){
		$errores = "<li> Por favor rellena los campos </li>";
	}
	else{
		$conexion = new mysqli('localhost', 'root', 'Jair2002', 'frapes');
        $sql = "SELECT * FROM usuario WHERE usuario = '$usuario';";
		if($resultado = $conexion->query($sql)){
			while($fila = $resultado->fetch_array()){
				$errores='<li> El usuario ya existe </li>';
			}//fin del while
		}// fin del if
        //$password = hash('sha512', $password);
         //$password2 = hash('sha512', $password2);
         echo "$usuario . $password . $password2";
         if($password != $password2){
         	$errores='<li> Las contraseñas no coinciden </li>';
         }
         //echo "".$usuario ."<br>".$password.'<br>'. $password2;
} //fin del else
   if($errores==''){
   	 $sql = "INSERT INTO usuario (id, usuario, password) VALUES (null, '$usuario', '$password');";
   	 echo $sql;
   	 $resultado = mysqli_query($conexion, $sql);
   	 header('Location:login.php'); 
   }//fin del while
   
}//fin del if

require 'vistas/registrate.vista.php';

?>