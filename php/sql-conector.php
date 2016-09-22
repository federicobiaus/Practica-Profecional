<?php

//including the Mysql connect parameters.
include("../php/db-credenciales.inc");
@error_reporting(0);
@$con = mysql_connect($host,$dbuser,$dbpass);
// Check connection
if (!$con)
{
    echo "Error al conectar a MySQL: " . mysql_error();
}


    @mysql_select_db($dbname,$con) or die ( "Imposible conectar con la database: $dbname");
	
?>