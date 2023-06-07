<?php

include("conexion.php");
session_start();

$nombres = $_POST["nombresUsu"];
$apellidos   = $_POST["apePaternoUsu"];

if(isset($_POST["btningresar"]))
{
	$query =("SELECT COUNT(*) as contar FROM usuario WHERE nombresUsu = '$nombres' AND apePaternoUsu='$apellidos'");
	$consulta = mysqli_query($conn, $query);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']>0)
	{
		$_SESSION['username'] = $nombresUsu;
		header('location: pantallas/ModoJuego.php');
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
	}
}



//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO usuario(nombresUsu,apePaternoUsu) values ('$nombres','$apellidos')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombres'); window.location='index.php' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>