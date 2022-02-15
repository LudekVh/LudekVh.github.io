<?php
     $contraseña = 'Jair2002';
     $usuario = 'root';
     $nombrebd = 'frapes';

     try {
     	$bd = new PDO(
     	'mysql:host=localhost;
     	dbname='.$nombrebd,
     	$usuario,
     	$contraseña
     	);
     } catch (Exeption $e) {
     	echo "Error de conexion".$e->getMenssage();
     }
?>


