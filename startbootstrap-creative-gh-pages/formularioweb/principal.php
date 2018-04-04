<?php

$nombre=$_REQUEST['nombre'];
$password=$_REQUEST['password'];

    include 'conexion.php';
	$query="SELECT * FROM administrador where nombre='$nombre' and password = '$password' ";
    $resultado = $mysqli->query($query);
	     if ($resultado->num_rows > 0) {
			// header("location:login.html");
			echo "Bienvenido";
		 }
?>	



		
