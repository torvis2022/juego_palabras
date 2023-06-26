<?php

include("conexion.php");
session_start();

$nombres = $_POST["nombresUsu"];
$apellidos   = $_POST["apePaternoUsu"];
$apellidosm   = $_POST["apeMaternoAlum"];

if(isset($_POST["btningresar"]))
{
	$query =("SELECT COUNT(*) as contar FROM usuario WHERE nomAlum = '$nombres' AND appAlum='$apellidos'AND apmAlum='$apellidosm'");
	$consulta = mysqli_query($conn, $query);
	$array = mysqli_fetch_array($consulta);
	
	if($array['contar']>0)
	{
		$_SESSION['username'] = $nombresUsu;
		header('location: pantallas/ModoJuego.php');
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}



//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO usuario(nomAlum,appAlum,apmAlum) values ('$nombres','$apellidos','$apellidosm')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombres'); window.location='index.php' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
}


?>