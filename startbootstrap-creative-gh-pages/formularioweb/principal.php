<!DOCTYPE html>
<html>
<head>
Bienvenido
</head>

<body>

<tbody>
<?php

$nombre=$_REQUEST['nombre'];
$contrasena=$_REQUEST['password'];

    include 'conexion.php';
    $query="SELECT * FROM administrador";
    $resultado = $mysqli->query($query);
	     if ($resultado->num_rows > 0) {
			header("location:login.html");
		else {
		 	echo ("pagina no encontrada");
			 }
		 }
?>	
</body>
</body>
</html>


		
