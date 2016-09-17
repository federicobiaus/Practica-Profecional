<?php
 
/*
 * 
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
*/
      
require_once('config.php');         

// Database connection                                   
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 

// Get all parameter provided by the javascript
$carrera = $mysqli->real_escape_string(strip_tags($_POST['id_carrea']));
$materia = $mysqli->real_escape_string(strip_tags($_POST['materia']));
$fecha = $mysqli->real_escape_string(strip_tags($_POST['fecha']));
$tipo = $mysqli->real_escape_string(strip_tags($_POST['tipo']));
$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));
$fecha = 1234;
$return=false;
if ( $stmt = $mysqli->prepare("INSERT INTO ".$tablename."  (id_materia, materia, fecha_examen, tipo_examen) VALUES (  ?, ?, ?, ?)")) {

	$stmt->bind_param("isss", $carrera, $materia, $fecha, $tipo); //i = integer, s=string, d=double, b=blob
    $return = $stmt->execute();
	$stmt->close();
}             
$mysqli->close();        

echo $return ? "ok" : "Error";

      

