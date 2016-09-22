<?php
session_start();
if(isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="lib/jquery.touchwipe.min.js"></script>

		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose();
				});
		</script>



		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style></head>
	<body id="page1">
		<div class="main">
		<!--header -->
			<header class="header-index">
				<div class="wrapper">
					<h1><a href="index.php" id="logo">logo</a></h1>
					<form id="status" method="post">
						<fieldset>
							<div id="estadoSession">
							<p>Bienvenido: <?php echo $_SESSION['usuario']; ?></p>
							<a href="logout.php">Cerrar Session</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<nav>
					<ul id="menu">
						<li class="active"><a href="index.php"><span>Inicio</span></a></li>
						<li><a href="php/Asistencias/asistencias.php"><span>Asistencias</span></a></li>
						<li><a href="php/LibroDeTemas/librodetemas.php"><span>Libro de temas</span></a></li>
						<li><a href="php/Evaluaciones/evaluaciones.php"><span>Evaluaciones</span></a></li>
						<li class="last"><a href="contacto.php"><span>Contacto</span></a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="content">	
		<br>
		<div class="pikachoose">
		<ul id="pikame" >
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/1980114_1528056914186426_7864638607357619162_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12291247_1528056917519759_6275177080787261247_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12304489_1528056770853107_1924315526406555526_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12308065_1528056920853092_4282661149067132265_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12309866_1528056764186441_8806335291984191304_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12314517_1528056634186454_2487336226603187923_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12322417_1528056774186440_2974844061092891484_o.jpg"/></a><span></span></li>
			<li><a href="http://www.isft179.edu.ar/wpress/"><img src="images/12322860_1528056637519787_5994497168683941465_o.jpg"/></a><span></span></li>
		</ul>
		</div>
		<br>				
		</div>
		<div class="main">
		  <footer>
			<ul id="icons">
				<li class="first">Seginos en:</li>
				<li><a href="https://www.facebook.com/pages/ISFT-N%C2%BA-179-Dr-Carlos-Pellegrini/272044409620642" target="_blank" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Picasa"><img src="images/icon3.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="YouTube"><img src="images/icon4.jpg" alt=""></a></li>
			</ul>
			<p>Copyright © 2016 I.S.F.T. Nº 179 Dr. Carlos Pellegrini<br>
		    All Rights Reserved</p>
		</footer>
		</div>
	</body>
</html>
<?php
}
else
{
	header('Location : login.php');
	echo '<script>location.href="login.php";</script>';
}
?>