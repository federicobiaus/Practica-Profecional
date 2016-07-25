<?php
session_start();
if(isset($_SESSION['usuario']))
{
	header('Location : index.php');
	echo '<script>location.href="index.php";</script>';
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AutoGestión - ISFT179 "Dr. Carlos Pellegrini"</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us  				.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
		<![endif]-->
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
</head>
<body id="page2">
<div class="main">
	<header id="header-login">
	<div class="wrapper">
		<h1><a href="login.php" id="logo">logo</a></h1>
	</div>
	</header>
	<br>
	<br>
	<div class="form" id="form1">
		<form id="contactform" style="visibility:hidden">
			<p class="contact">
				<label for="name">Nombre</label>
			</p>
			<input id="name" name="name" placeholder="Primer y segundo nombre" required="" tabindex="1" type="text">
			<p class="contact">
				<label for="email">Email</label>
			</p>
			<input id="email" name="email" placeholder="Ejemplo@domain.com" required="" tabindex="2" type="email">
			<p class="contact">
				<label for="username">Nombre de usuario</label>
			</p>
			<input id="username" name="username" placeholder="Username" required="" tabindex="3" type="text">
			<p class="contact">
				<label for="password">Contraseña</label>
			</p>
			<input type="password" id="password" placeholder="Password" required="" tabindex="4">
			<p class="contact">
			<label for="repassword">Confirmar contraseña</label>
			</p>
	        <input type="password" placeholder="Confirmar Password" id="confirm_password" required="" tabindex="5">
			<br>
			<label>Fecha de nacimiento</label>
			<fieldset>
				<label class="month">
					<select class="select-style" name="BirthMonth" id="BirthMonth" tabindex="6">
						<option value="">Mes</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Deciembre</option>
					</select>
				</label>
				<label>Dia<input class="birthday" maxlength="2" name="BirthDay" id="BirthDay" placeholder="Day" required="" tabindex="7"></label>
				<label>Año <input class="birthyear" maxlength="4" name="BirthYear" id="BirthYear" placeholder="Year" required="" tabindex="8"></label>
			</fieldset>
			<br/>
			<input class="buttom" id="submitRegistro" tabindex="9" value="Registrarme" type="submit" onclick="enviar_datos_registros_ajax();">
			<div id="resultado" style="visibility:visible"></div>
		</form>
		<form id="loginform" style="visibility:visible; position:absolute; left: 269px; top: 178px; width: 625px;">
			<p class="contact">
				<label for="username">Nombre de usuario</label>
			</p>
			<input id="user" placeholder="Username o Email" required="" type="text">
			<p class="contact">
				<label for="password">Contraseña</label>
			</p>
			<input type="password" id="pass" placeholder="Password" required="">
			<br><br>
			<input class="buttom" name="submitLogin" id="submitLogin" value="Iniciar Sesión" type="submit" onclick="validar_login_ajax();">
			<div id="resultado2" style="visibility:visible"></div>
	  </form>
		<p>
	  <table width="96%" style="width:100%;" align="center">
				<tr>
					<td width="49%" align="center">
<!--						<input class="buttom" id="submit" value="No tengo cuenta!" type="submit" onClick="mostrarForm();">-->
					</td>
					<td width="49%" align="center">
						<input class="buttom" id="cambiarBoton" value="No tengo cuenta!" type="submit" onClick="cambiarLogin(); limpiarMensajes();">
					</td>
				</tr>
	  </table>
		</p>
	</div>
	<br>
	<br>
</div>
<div class="main">
	<footer>
	<ul id="icons">
		<li class="first">Seginos en:</li>
		<li><a href="https://www.facebook.com/pages/ISFT-N%C2%BA-179-Dr-Carlos-Pellegrini/272044409620642" target="_blank" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
		<li><a href="#" target="_blank" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
		<li><a href="#" target="_blank" class="normaltip" title="Picasa"><img src="images/icon3.jpg" alt=""></a></li>
		<li><a href="#" target="_blank" class="normaltip" title="YouTube"><img src="images/icon4.jpg" alt=""></a></li>
	</ul>
	<p>
		Copyright © 2016 I.S.F.T. Nº 179 Dr. Carlos Pellegrini<br>
		 All Rights Reserved
	</p>
	</footer>
</div>
</body>
</html>
<?php
}
?>