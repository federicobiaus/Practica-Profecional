<?php
$db_username = 'root';
$db_password = '';
$db_name = 'isft179';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name) or die ('No se pudo conectar a la DB');

if($mysqli->connect_errno)
{
 printf("Error en la conexion: %s\n",$mysqli -> connect_errno);
 exit();
}

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$usuario = $_POST['username'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['fecha'];
$tipo_user = "a";

/*
$sql= "SELECT COUNT(1) AS existe FROM usuarios WHERE Usuario = '$usuario'";
$resultado = mysqli_query($mysqli,$sql);
$fila = mysqli_fetch_assoc($resultado);
$existe = $fila['existe'];
if($existe > 0)
	echo("Usuario existente");

$sql= "SELECT COUNT(1) AS existe FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($mysqli,$sql);
$fila = mysqli_fetch_assoc($resultado);
$existe = $fila['existe'];
if($existe > 0)
	echo("Email existente");
*/

$sql= "SELECT MAX(UserId)+1 AS UserId FROM usuarios";
$resultado = mysqli_query($mysqli,$sql);
$fila = mysqli_fetch_assoc($resultado);
$id = $fila['UserId'];

$sql = "INSERT INTO usuarios (UserId, Nombre, Apellido, email, Usuario, pw, FechaAlta, TipoUsuario, FechaBaja, UsuarioBaja) 
		      VALUES ($id, '$nombres', '$nombres', '$email', '$usuario', '$contrasena', '$fecha', '$tipo_user', null, null)";

$resultado = mysqli_query($mysqli,$sql);
	if($resultado == true)
	{
		echo("Registrado");
	}
	else
	{
		echo("Error al registrar");
	}
	
?>
