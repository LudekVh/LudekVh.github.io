<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Registrate Usuario</title>
</head>
<body>
	<div class="contenedor">
	<h1 class="titulo"> Registrate Usuario</h1>	
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="get" name="login" class="formulario">
     <div class="form-group">
     	<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="usuario">
     </div>

     <div class="form-group">
     	<i class="icono izquierda fa fa-user"></i><input type="password" name="password" class="password" placeholder="contraseña">
     </div>

      <div class="form-group">
     	<i class="icono izquierda fa fa-user"></i><input type="password" name="password2" class="password-btn" placeholder="Repetir contraseña">
        <i class="submit-btn fa fa-arrow-right" onclick="login.submit()" ></i>
     </div>
     <?php
     if(!empty($errores)) : ?>
        <ul>
            <?php echo "$errores"; ?>
        </ul>
    <?php endif ?>	
    </form>
    <p class="text-registrate">
    	¿Ya tienes cuenta?
    	<a href="login.php">Login </a>
    </p>	
</div>
</body>
</html>