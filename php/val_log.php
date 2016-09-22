<?php
session_start();
include '../php/sql-conector.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT Usuario FROM usuarios WHERE Usuario = '$username' OR email= '$username' AND pw = '$password'";
$resultado = mysql_query($sql);
if(mysql_num_rows($resultado) > 0)
{

	$_SESSION['usuario']= mysql_result($resultado, 0);//$username;
	echo '<script>location.href="index.php";</script>';
}
else
{
	echo '<span>Usuario y/o contrase&ntilde;a incorrecto.</span>';
}
?>
