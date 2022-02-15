<?php
session_start();

if(isset($_SESSION['Trabajador'])){
	header('Location:contenido.php');
}
else{
	header('Location:registrate.php');
}
?>