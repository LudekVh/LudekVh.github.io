<?php
    include 'conexion.php';
    $sentencia = $bd->query("SELECT * FROM cliente;");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>CRUD</title>
</head>
<a class="nav-link" aria-current="page" href="Proyecto APWB Software/Registros.html"><span class="fs-5 text-blak fw-bold">ATRAS</span></a>
<body>
	<center> 
		<h3>LISTA DE CLIENTES</h3>
		 <table class="table" >
         <thead class="table-success table-striped" >
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Direccion</td>
				<td>Telefono</td>
				
			</tr>
		 </thead>

			<?php
			    foreach ($cliente as $dato) {
			    	?>
				    <tr>
						<td><?php echo $dato->id; ?></td>
						<td><?php echo $dato->nombre; ?></td>
						<td><?php echo $dato->correo; ?></td>
						<td><?php echo $dato->direcion; ?></td>
						<td><?php echo $dato->telefono; ?></td>
						<!--Iconos --->
						<td><a href="editar.php?id=<?php echo $dato->id; ?>">EDITAR</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->id; ?>">ELIMINAR</a></td>
				    </tr>
			    	<?php
			    }
			?>
	    </table>

	    <!----Inicio Insetar Registros ---->
	    <hr>
	    <h3>INSERTAR CLIENTE</h3>
	    <form method="get" action="insertar.php">
	    <table>
	    	<tr>
	    		<td>Nombre</td>
	    		<td><input type="text" name="nombre"></td>
	    	</tr>
	    	<tr> 
	    	    <td>Correo</td>
	    		<td><input type="text" name="correo"></td>
	    	</tr>
	    	<tr>
	    		<td>Direcion</td>
	    		<td><input type="text" name="direcion"></td>
	    	</tr>
	    	<tr>
	    		<td>Telefono</td>
	    		<td><input type="text" name="telefono"></td>
	    	</tr>
	    	<input type="hidden" name="oculto" value="1">
	    	<tr>
	    		<td><input type="reset" name=""></td>
	    		<td><input type="submit" value="INGRESAR CLIENTE"></td>
	    	</tr>
	    </table>
	    </form>

	    <!---- Fin Insertar ----->
    </center>
</body>
</html>