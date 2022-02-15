<?php 
    if (!isset($_GET ['id'])) {
    	header('Location: cliente.php');
    }

	include 'conexion.php';
    $id = $_GET ['id'];

    $sentencia = $bd->prepare("SELECT * FROM cliente WHERE id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Editar Cliente</title>
 </head>
 <body>
 	<center>
 		<h3>Editar Cliente</h3>
 		<form method="get" action="editarProcesos.php">
 			<table>
 				<tr>
 					<td>Nombre</td>
 					<td><input type="text" name="nombre" value="<?php echo $persona->nombre ?>"></td>
 				</tr>
 				<tr>
 					<td>Correo</td>
 					<td><input type="text" name="correo" value="<?php echo $persona->correo ?>"></td>
 				</tr>
 				<tr>
 					<td>Direccion</td>
 					<td><input type="text" name="direcion" value="<?php echo $persona->direcion ?>"></td>
 				</tr>
 				<tr>
 					<td>Telefono</td>
 					<td><input type="text" name="telefono" value="<?php echo $persona->telefono ?>"></td>
 				</tr>
 				<tr>
 					<input type="hidden" name="oculto">
 					<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
 					<td colspan="2"><input type="submit" class="btn btn-primary" value="EDITAR CLIENTE"></td>
 				</tr>
 			</table>
 		</form>
 	</center>
 	
 </body>
 </html>