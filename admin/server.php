<?php
	$conect = @mysql_connect("localhost","root","20101489") or die("No se encontró el servidor");
	mysql_select_db("canaches",$conect)or die("No se encontró la base de datos");
?>