<?php

$nombre=$_REQUEST['nombre'];
$password=$_REQUEST['password'];

    include 'conexion.php';
    $query="SELECT * FROM administrador";
    $resultado = $mysqli->query($query);
	     if ($resultado->num_rows > 0) {
			header("location:login.html");

		 }
?>	



		
