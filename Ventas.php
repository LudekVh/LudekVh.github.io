<?php
    include 'conexion.php';
    $sentencia = $bd->query("SELECT * FROM venta;");
    $venta = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>FRAPES IULIUS</title>
</head>
<a class="nav-link" aria-current="page" href="Proyecto APWB Software/Registros.html"><span class="fs-5 text-blak fw-bold">ATRAS</span></a>
<body>
	<center> 
		<br>
		<h3>LISTA DE VENTAS</h3>
		 <table class="table" >
         <thead class="table-success table-striped" >
			<tr>
				<td>Id</td>
				<td>IdProducto</td>
				<td>IdCliente</td>
				<td>IdVendedor</td>
				<td>Fecha</td>
				<td>Cantidad</td>
				<td>Precio</td>
				
			</tr>
		 </thead>

			<?php
			    foreach ($venta as $dato) {
			    	?>
				    <tr>
						<td><?php echo $dato->id; ?></td>
						<td><?php echo $dato->idProducto; ?></td>
						<td><?php echo $dato->idCliente; ?></td>
						<td><?php echo $dato->idVendedor; ?></td>
						<td><?php echo $dato->fecha; ?></td>
						<td><?php echo $dato->cantidad; ?></td>
						<td><?php echo $dato->Precio; ?></td>
						<!--Iconos --->
						<td><a href="editarv.php?id=<?php echo $dato->id; ?>">EDITAR</a></td>
						<td><a href="eliminarVenta.php?id=<?php echo $dato->id; ?>">ELIMINAR</a></td>
				    </tr>
			    	<?php
			    }
			?>
	    </table>

	    <!----Inicio Insetar Registros ---->
	    <hr>
	    <h3>INSERTAR VENTA</h3>
	    <form method="get" action="InsertarVenta.php">
	    <table>
	    	<tr>
	    		<td>Producto</td>
	    		<td><input type="text" name="idProducto"></td>
	    	</tr>
	    	<tr> 
	    	    <td>Cliente</td>
	    		<td><input type="text" name="idCliente"></td>
	    	</tr>
	    	<tr>
	    		<td>Vendedor</td>
	    		<td><input type="text" name="idVendedor"></td>
	    	</tr>
	    	<tr>
	    		<td>Fecha</td>
	    		<td><input type="text" name="fecha"></td>
	    	</tr>
	    	<tr>
	    		<td>Cantidad</td>
	    		<td><input type="text" name="cantidad"></td>
	    	</tr>
	    	<tr>
	    		<td>Precio</td>
	    		<td><input type="text" name="Precio"></td>
	    	</tr>
	    	<input type="hidden" name="oculto" value="1">
	    	<tr>
	    		<td><input type="reset" name=""></td>
	    		<td><input type="submit" value="INGRESAR VENTA"></td>
	    	</tr>
	    </table>
	    </form>

	    <!---- Fin Insertar ----->
    </center>
</body>
</html>