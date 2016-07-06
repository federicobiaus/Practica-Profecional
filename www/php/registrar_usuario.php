<?php
$db_username = 'root';
$db_password = '';
$db_name = 'isft179';
$db_host = 'localhost';
$db_mysqli = new mysqli($db_host, $db_username, $db_password, $db_name) or die ('No se pudo conectar a la DB');

if($db_mysqli -> connect_errno)
{
 printf("Error en la conexion: %s&\n",$db_mysqli -> connect_errno);
 exit();
}

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$fecha = $_POST['fecha'];
$tipo_user = "a";

$sql = "INSERT INTO usuarios (UserId, Nombre, Apellido, Usuario, pw, FechaAlta, TipoUsuario, FechaBaja, UsuarioBaja)
 VALUES (2, '$nombres', '$nombres', '$usuario', '$contrasena', '$fecha', '$tipo_user', null, null)";

$query = $db_mysqli->query($sql);
	if($query == true)
	{
		echo("Registrado");
	}
	else
	{
		echo("Error al registrar");
	}

?>
