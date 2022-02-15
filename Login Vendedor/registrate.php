<?php
session_start();
if(isset($_SESSION['Trabajador'])){
	header('Location:index.php');
}
if($_SERVER['REQUEST_METHOD']=='GET'){
	$Trabajador = $_GET['trabajador'];
	$password = $_GET['password'];
	$password2 = $_GET['password2'];
	//echo "".$usuario .$password . $password2;
	$errores='';
	if(empty($Trabajador) or empty($password) or empty($password2)){
		$errores = "<li> Por favor rellena los campos </li>";
	}
	else{
		$conexion = new mysqli('localhost', 'root', 'Jair2002', 'frapes');
        $sql = "SELECT * FROM Trabajador WHERE trabajador = '$Trabajador';";
		if($resultado = $conexion->query($sql)){
			while($fila = $resultado->fetch_array()){
				$errores='<li> El trabajador ya existe </li>';
			}//fin del while
		}// fin del if
        //$password = hash('sha512', $password);
         //$password2 = hash('sha512', $password2);
         echo "$Trabajador . $password . $password2";
         if($password != $password2){
         	$errores='<li> Las contraseñas no coinciden </li>';
         }
         //echo "".$usuario ."<br>".$password.'<br>'. $password2;
} //fin del else
   if($errores==''){
   	 $sql = "INSERT INTO Trabajador (id, trabajador, password) VALUES (null, '$Trabajador', '$password');";
   	 echo $sql;
   	 $resultado = mysqli_query($conexion, $sql);
   	 header('Location:login.php'); 
   }//fin del while
   
}//fin del if

require 'vistas/registrate.vista.php';

?>
?>