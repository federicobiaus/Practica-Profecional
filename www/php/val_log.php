<?php
session_start();
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
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT Usuario, pw FROM usuarios WHERE Usuario = '$username' AND pw = '$password'";
$resultado = mysqli_query($mysqli,$sql);
if(mysqli_num_rows($resultado) > 0)
{

	$_SESSION['usuario']=$username;
	echo '<script>location.href="index.php";</script>';
}
else
{
	echo '<span>Usuario y/o contraseña incorrecto.</span>';
}
?>
