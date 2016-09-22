<?php
session_start();
include '../php/sql-conector.php';

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$usuario = $_POST['username'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['fecha'];
$tipo_user = "a";
$user = $_POST['username'];

if($nombres == null || $email == null || $usuario == null || $contrasena == null || $fecha == null)
{
	echo '<span>Error al registrarse, alguno de los datos no es valido.</span>';
}
else
{
	$sql= "SELECT COUNT(1) AS existe FROM usuarios WHERE Usuario = '$usuario'";
	$resultado = mysql_query($sql);
	$fila = mysql_fetch_assoc($resultado);
	$existe = $fila['existe'];
	if($existe > 0)
	{
		echo '<span>Usuario existente.</span>';
	}
	else
	{
		$sql= "SELECT COUNT(1) AS existe FROM usuarios WHERE email = '$email'";
		$resultado = mysql_query($sql);
		$fila = mysql_fetch_assoc($resultado);
		$existe = $fila['existe'];
		if($existe > 0)
		{
			echo '<span>Email existente.</span>';
		}
		else
		{
			$sql= "SELECT MAX(UserId)+1 AS UserId FROM usuarios";
			$resultado = mysql_query($sql);
			$fila = mysql_fetch_assoc($resultado);
			$id = $fila['UserId'];
			
			$sql = "INSERT INTO usuarios (UserId, Nombre, Apellido, email, Usuario, pw, FechaAlta, TipoUsuario, FechaBaja, UsuarioBaja) 
						  VALUES ($id, '$nombres', '$nombres', '$email', '$usuario', '$contrasena', '$fecha', '$tipo_user', null, null)";
			
			$resultado = mysql_query($sql);
				if($resultado == true)
				{
					$_SESSION['usuario']=$user;
					echo '<script>location.href="index.php";</script>';
				}
				else
				{
					echo '<span>Error al registrarse.</span>';
				}
		}
	}
}

?>
