<?php 
    if (!isset($_GET ['id'])) {
    	header('Location:Ventas.php');
    }

	include 'conexion.php';
    $id = $_GET ['id'];

    $sentencia = $bd->prepare("SELECT * FROM venta WHERE id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Editar Venta</title>
 </head>
 <body>
 	<center>
 		<h3>Editar Venta</h3>
 		<form method="get" action="editarVenta.php">
 			<table>
 				<tr>
 					<td>IdProducto</td>
 					<td><input type="text" name="idProducto" value="<?php echo $persona->idProducto ?>"></td>
 				</tr>
 				<tr>
 					<td>IdCliente</td>
 					<td><input type="text" name="idCliente" value="<?php echo $persona->idCliente ?>"></td>
 				</tr>
 				<tr>
 					<td>IdVendedor</td>
 					<td><input type="text" name="idVendedor" value="<?php echo $persona->idVendedor ?>"></td>
 				</tr>
 				<tr>
 					<td>Fecha</td>
 					<td><input type="text" name="fecha" value="<?php echo $persona->fecha ?>"></td>
 				</tr>
 				<tr>
 					<td>Cantidad</td>
 					<td><input type="text" name="cantidad" value="<?php echo $persona->cantidad ?>"></td>
 				</tr>
 				<tr>
 					<td>Precio</td>
 					<td><input type="text" name="Precio" value="<?php echo $persona->Precio ?>"></td>
 				</tr>
 				<tr>
 					<input type="hidden" name="oculto">
 					<input type="hidden" name="id" value="<?php echo $persona->id; ?>">
 					<td colspan="2"><input type="submit" class="btn btn-primary" value="EDITAR VENTA"></td>
 				</tr>
 			</table>
 		</form>
 	</center>
 	
 </body>
 </html>