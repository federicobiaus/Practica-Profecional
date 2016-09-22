<?php
session_start();
if(isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../../css/ie.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/responsive.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="../../css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="all">
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
					<h1><a href="../../index.php" id="logo">logo</a></h1>
					<form id="status" method="post">
						<fieldset>
							<div id="estadoSession">
							<p>Bienvenido: <?php echo $_SESSION['usuario']; ?></p>
							<a style="" href="../../logout.php">Cerrar Session</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="../../index.php"><span>Inicio</span></a></li>
						<li><a href="../Asistencias/asistencias.php"><span>Asistencias</span></a></li>
						<li><a href="../LibroDeTemas/librodetemas.php"><span>Libro de temas</span></a></li>
						<li class="active"><a href="evaluaciones.php"><span>Evaluaciones</span></a></li>
						<li class="last"><a href="../../contacto.php"><span>Contacto</span></a></li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="content2">	
		<div id="wrap">
			<!-- Feedback message zone -->
			<div id="message"></div>

            <div id="toolbar">
              <input type="text" id="filter" name="filter" placeholder="Filter :type any text here"  />
              <a id="showaddformbutton" class="button green"><i class="fa fa-plus"></i> Add new row</a>            </div>
			<!-- Grid contents -->
			<div id="tablecontent"></div>
		
			<!-- Paginator control -->
			<div id="paginator"></div>
		</div>  
		
		<script src="js/evaluaciones.js"></script> 
		<script src="../../js/jquery-ui.min.js"></script>
		<script src="../../js/editablegrid-2.1.0-b25.js"></script> 
		<script src="../../js/html5.js"></script> 
		<script src="../../js/jquery-1.11.1.min.js"></script> 

		<script type="text/javascript">
		
            var datagrid = new DatabaseGrid();
			window.onload = function() { 

                // key typed in the filter field
                $("#filter").keyup(function() {
                    datagrid.editableGrid.filter( $(this).val());

                    // To filter on some columns, you can set an array of column index 
                    //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
                  });

                $("#showaddformbutton").click( function()  {
                  showAddForm();
                });
                $("#cancelbutton").click( function() {
                  showAddForm();
                });

                $("#addbutton").click(function() {
                  datagrid.addRow();
                });

        
			}; 
		</script>

        <!-- simple form, used to add a new row -->
        <div id="addform" style="width: 400px; height: 230px;">
			
			<div class="row">
                <input type="text" id="id_carrea" name="id_carrea" placeholder="Codigo Carrera" />
            </div>
			
			<div class="row">
                <input type="text" id="materia" name="materia" placeholder="Materia" />
            </div>
			
            <div class="row">
                <input type="text" id="fecha" name="fecha" placeholder="Fecha" />
            </div>

             <div class="row">
                <input type="text" id="tipo" name="tipo" placeholder="Tipo examen" />
            </div>

            <div class="row tright">
              <a id="addbutton" class="button green" ><i class="fa fa-save"></i> Apply</a>
              <a id="cancelbutton" class="button delete">Cancel</a>            </div>
        </div>
		<br>
		<br>				
		</div>
		<div class="main">
		  <footer>
			<ul id="icons">
				<li class="first">Seginos en:</li>
				<li><a href="https://www.facebook.com/pages/ISFT-N%C2%BA-179-Dr-Carlos-Pellegrini/272044409620642" target="_blank" class="normaltip" title="Facebook"><img src="../../images/icon1.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Twitter"><img src="../../images/icon2.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="Picasa"><img src="../../images/icon3.jpg" alt=""></a></li>
				<li><a href="#" class="normaltip" title="YouTube"><img src="../../images/icon4.jpg" alt=""></a></li>
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
	echo '<script>location.href="../../login.php";</script>';
}
?>